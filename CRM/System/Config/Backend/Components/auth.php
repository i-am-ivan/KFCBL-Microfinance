<?php
// /CRM/System/Config/Backend/Components/auth.php

session_start();

// Error array for passing errors
$errors = array();

// Include database configuration
require_once dirname(__DIR__) . '/DB/db.config.php';
require_once dirname(__DIR__) . '/DB/Database.php';

/**
 * Process login form
 */
function processLogin() {
    global $errors;
    
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return false;
    }
    
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $rememberMe = isset($_POST['rememberMe']) ? true : false;
    
    // Validation
    if (empty($email)) {
        $errors[] = "Email is required";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    
    if (!empty($errors)) {
        return false;
    }
    
    try {
        $db = Database::getInstance();
        
        // Check user
        $sql = "SELECT * FROM Users WHERE Email = ? AND IsActive = 1";
        $user = $db->selectSingle($sql, [$email]);
        
        if (!$user) {
            $errors[] = "Invalid email or password";
            return false;
        }
        
        // Check account lock
        if ($user['AccountLockedUntil'] && strtotime($user['AccountLockedUntil']) > time()) {
            $errors[] = "Account is locked. Please try again later.";
            return false;
        }
        
        // Verify password
        if (!password_verify($password, $user['PasswordHash'])) {
            // Increment failed attempts
            $failedAttempts = $user['FailedLoginAttempts'] + 1;
            $lockUntil = null;
            
            if ($failedAttempts >= MAX_LOGIN_ATTEMPTS) {
                $lockUntil = date('Y-m-d H:i:s', time() + 1800); // 30 minutes
            }
            
            $db->execute(
                "UPDATE Users SET FailedLoginAttempts = ?, AccountLockedUntil = ? WHERE UserID = ?",
                [$failedAttempts, $lockUntil, $user['UserID']]
            );
            
            // Log failed attempt
            logLogin($user['UserID'], false, 'Invalid password');
            
            $errors[] = "Invalid email or password";
            return false;
        }
        
        // Reset failed attempts
        $db->execute(
            "UPDATE Users SET FailedLoginAttempts = 0, AccountLockedUntil = NULL WHERE UserID = ?",
            [$user['UserID']]
        );
        
        // Check if 2FA is enabled
        if ($user['TwoFactorEnabled']) {
            // Generate 6-digit code
            $code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $expiresAt = date('Y-m-d H:i:s', time() + (TWOFA_EXPIRY_MINUTES * 60));
            
            // Store in session
            $_SESSION['2fa_user_id'] = $user['UserID'];
            $_SESSION['2fa_code'] = $code;
            $_SESSION['2fa_expires'] = $expiresAt;
            $_SESSION['2fa_remember'] = $rememberMe;
            
            // Store in database
            $db->execute(
                "INSERT INTO TwoFactorCodes (UserID, Code, ExpiresAt) VALUES (?, ?, ?)",
                [$user['UserID'], $code, $expiresAt]
            );
            
            // Send email (implement your email function here)
            send2FAEmail($user['Email'], $code);
            
            // Log 2FA request
            logLogin($user['UserID'], true, '2FA sent');
            
            return true; // Success - redirect to 2FA page
            
        } else {
            // No 2FA - login directly
            loginUser($user, $rememberMe);
            return true;
        }
        
    } catch (Exception $e) {
        $errors[] = "System error. Please try again.";
        error_log("Login error: " . $e->getMessage());
        return false;
    }
}

/**
 * Process 2FA verification
 */
function process2FA() {
    global $errors;
    
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return false;
    }
    
    // Check if 2FA session exists
    if (!isset($_SESSION['2fa_user_id']) || !isset($_SESSION['2fa_code'])) {
        $errors[] = "Session expired. Please login again.";
        return false;
    }
    
    // Check if code expired
    if (strtotime($_SESSION['2fa_expires']) < time()) {
        session_destroy();
        $errors[] = "Verification code has expired. Please login again.";
        return false;
    }
    
    $enteredCode = $_POST['verification_code'] ?? '';
    
    if (empty($enteredCode)) {
        $errors[] = "Please enter verification code";
        return false;
    }
    
    // Verify code
    if ($enteredCode !== $_SESSION['2fa_code']) {
        $errors[] = "Invalid verification code";
        return false;
    }
    
    try {
        $db = Database::getInstance();
        $userId = $_SESSION['2fa_user_id'];
        $rememberMe = $_SESSION['2fa_remember'] ?? false;
        
        // Get user with role
        $sql = "SELECT u.*, r.RoleName FROM Users u 
                LEFT JOIN Roles r ON u.RoleID = r.RoleID 
                WHERE u.UserID = ?";
        $user = $db->selectSingle($sql, [$userId]);
        
        if (!$user) {
            $errors[] = "User not found";
            return false;
        }
        
        // Mark 2FA code as used
        $db->execute(
            "UPDATE TwoFactorCodes SET IsUsed = 1, UsedAt = NOW() 
             WHERE UserID = ? AND Code = ?",
            [$userId, $_SESSION['2fa_code']]
        );
        
        // Login user
        loginUser($user, $rememberMe);
        
        // Clear 2FA session
        unset($_SESSION['2fa_user_id']);
        unset($_SESSION['2fa_code']);
        unset($_SESSION['2fa_expires']);
        unset($_SESSION['2fa_remember']);
        
        return true;
        
    } catch (Exception $e) {
        $errors[] = "System error. Please try again.";
        error_log("2FA error: " . $e->getMessage());
        return false;
    }
}

/**
 * Login user and set session
 */
function loginUser($user, $rememberMe = false) {
    $_SESSION['user_id'] = $user['UserID'];
    $_SESSION['user_email'] = $user['Email'];
    $_SESSION['user_name'] = $user['FirstName'] . ' ' . $user['LastName'];
    $_SESSION['user_role'] = $user['RoleName'] ?? 'User';
    $_SESSION['login_time'] = time();
    
    // Remember me
    if ($rememberMe) {
        session_set_cookie_params(86400 * 30); // 30 days
    }
    
    // Log successful login
    logLogin($user['UserID'], true);
    
    // Update last login
    try {
        $db = Database::getInstance();
        $db->execute(
            "UPDATE Users SET LastLogin = NOW() WHERE UserID = ?",
            [$user['UserID']]
        );
    } catch (Exception $e) {
        // Silent fail
        error_log("Update last login error: " . $e->getMessage());
    }
}

/**
 * Log login attempt
 */
function logLogin($userId, $success, $reason = '') {
    try {
        $db = Database::getInstance();
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
        $agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
        $status = $success ? 'Success' : 'Failed';
        
        $db->execute(
            "INSERT INTO LoginLogs (UserID, IPAddress, UserAgent, LoginStatus, FailureReason) 
             VALUES (?, ?, ?, ?, ?)",
            [$userId, $ip, $agent, $status, $reason]
        );
    } catch (Exception $e) {
        // Silent fail
        error_log("Login logging error: " . $e->getMessage());
    }
}

/**
 * Send 2FA email (stub - implement your email function)
 */
function send2FAEmail($email, $code) {
    // Implement your email sending function here
    // Example using mail() function:
    $subject = "Your KFCBL CRM Verification Code";
    $message = "Your verification code is: $code\nThis code will expire in " . TWOFA_EXPIRY_MINUTES . " minutes.";
    $headers = "From: noreply@kfcbl.com\r\n";
    
    // Uncomment to send email
    // mail($email, $subject, $message, $headers);
    
    // For testing, log the code
    error_log("2FA Code for $email: $code");
}

/**
 * Redirect user based on role
 */
function redirectByRole() {
    if (!isset($_SESSION['user_role'])) {
        return;
    }
    
    $role = $_SESSION['user_role'];
    $dashboard = '';
    
    switch ($role) {
        case 'Chairman':
            $dashboard = BASE_URL . '/CRM/Admin/Chairman/index.php';
            break;
        case 'Secretary General':
            $dashboard = BASE_URL . '/CRM/Admin/SecretaryGeneral/index.php';
            break;
        case 'Treasurer':
            $dashboard = BASE_URL . '/CRM/Admin/Treasurer/index.php';
            break;
        case 'Secretary':
            $dashboard = BASE_URL . '/CRM/Admin/Secretary/index.php';
            break;
        case 'Stage-Manager':
            $dashboard = BASE_URL . '/CRM/Admin/Stage Manager/index.php';
            break;
        default:
            $dashboard = BASE_URL . '/CRM/Admin/index.php';
    }
    
    header('Location: ' . $dashboard);
    exit;
}

/**
 * Check if user is logged in
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']) && isset($_SESSION['user_role']);
}

/**
 * Logout user
 */
function logout() {
    // Log logout time
    if (isset($_SESSION['user_id'])) {
        try {
            $db = Database::getInstance();
            $db->execute(
                "UPDATE LoginLogs SET LogoutDate = NOW() 
                 WHERE UserID = ? AND LogoutDate IS NULL 
                 ORDER BY LoggedDate DESC LIMIT 1",
                [$_SESSION['user_id']]
            );
        } catch (Exception $e) {
            // Silent fail
        }
    }
    
    // Clear session
    $_SESSION = array();
    
    // Destroy session cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    // Destroy session
    session_destroy();
}
?>