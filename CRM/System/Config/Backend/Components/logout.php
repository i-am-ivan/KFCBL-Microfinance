<?php
// /CRM/System/logout.php

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database config for logging
require_once dirname(__DIR__) . '/Config/Backend/DB/db.config.php';
require_once dirname(__DIR__) . '/Config/Backend/DB/Database.php';

// Log logout activity if user is logged in
if (isset($_SESSION['user_id'])) {
    try {
        $db = Database::getInstance();
        
        // Update last logout time in login logs
        $db->execute(
            "UPDATE LoginLogs SET LogoutDate = NOW() 
             WHERE UserID = ? AND LogoutDate IS NULL 
             ORDER BY LoggedDate DESC LIMIT 1",
            [$_SESSION['user_id']]
        );
        
    } catch (Exception $e) {
        // Silent fail - don't prevent logout
        error_log("Logout logging error: " . $e->getMessage());
    }
    
    // Log activity
    try {
        $db->execute(
            "INSERT INTO UserActivityLogs (UserID, ActivityType, Description, IPAddress) 
             VALUES (?, 'LOGOUT', 'User logged out', ?)",
            [$_SESSION['user_id'], $_SERVER['REMOTE_ADDR'] ?? 'Unknown']
        );
    } catch (Exception $e) {
        // Silent fail
    }
}

// Destroy all session data
$_SESSION = [];

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

// Redirect to login page
header('Location: ' . BASE_URL . '/index.php');
exit;