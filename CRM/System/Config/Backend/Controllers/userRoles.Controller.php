<?php
// /CRM/System/Config/Backend/Controllers/userRoles.Controller.php

// Start session to get user info if needed
session_start();

// Include database connection
require_once dirname(__DIR__, 2) . '/DB/Database.php';

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_role'])) {
    
    // Get form data
    $roleName = $_POST['role_name'] ?? '';
    $status = $_POST['status'] ?? 'Active';
    
    // Get checkbox values (if checked = 1, if not = 0)
    $bodabodaCreate = isset($_POST['bodaboda_create']) ? 1 : 0;
    $bodabodaRead = isset($_POST['bodaboda_read']) ? 1 : 0;
    $bodabodaUpdate = isset($_POST['bodaboda_update']) ? 1 : 0;
    $bodabodaDelete = isset($_POST['bodaboda_delete']) ? 1 : 0;
    
    $loansCreate = isset($_POST['loans_create']) ? 1 : 0;
    $loansRead = isset($_POST['loans_read']) ? 1 : 0;
    $loansUpdate = isset($_POST['loans_update']) ? 1 : 0;
    $loansDelete = isset($_POST['loans_delete']) ? 1 : 0;
    
    $landsCreate = isset($_POST['lands_create']) ? 1 : 0;
    $landsRead = isset($_POST['lands_read']) ? 1 : 0;
    $landsUpdate = isset($_POST['lands_update']) ? 1 : 0;
    $landsDelete = isset($_POST['lands_delete']) ? 1 : 0;
    
    // Get created by user (use 1001 as default)
    $createdBy = 1001;
    
    try {
        $db = Database::getInstance();
        
        // Generate RoleID (format: ROL + YYYYMM + 3-digit number)
        // First, get the next number for this month
        $currentMonth = date('Ym');
        $lastRole = $db->selectSingle(
            "SELECT RoleID FROM Roles WHERE RoleID LIKE 'ROL{$currentMonth}%' ORDER BY RoleID DESC LIMIT 1"
        );
        
        if ($lastRole) {
            $lastNumber = intval(substr($lastRole['RoleID'], -3));
            $nextNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $nextNumber = '001';
        }
        
        $roleID = 'ROL' . $currentMonth . $nextNumber;
        
        // Insert into Roles table
        $rolesSql = "INSERT INTO Roles (RoleID, RoleName, Status, CreatedBy) 
                     VALUES (?, ?, ?, ?)";
        
        $rolesResult = $db->execute($rolesSql, [
            $roleID,
            $roleName,
            $status,
            $createdBy
        ]);
        
        if ($rolesResult) {
            // Insert into RolePrivileges table
            $privilegesSql = "INSERT INTO RolePrivileges 
                (RoleID, 
                 BodabodaCreate, BodabodaRead, BodabodaUpdate, BodabodaDelete,
                 LoansCreate, LoansRead, LoansUpdate, LoansDelete,
                 LandsCreate, LandsRead, LandsUpdate, LandsDelete,
                 CreatedBy) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            $privilegesResult = $db->execute($privilegesSql, [
                $roleID,
                $bodabodaCreate, $bodabodaRead, $bodabodaUpdate, $bodabodaDelete,
                $loansCreate, $loansRead, $loansUpdate, $loansDelete,
                $landsCreate, $landsRead, $landsUpdate, $landsDelete,
                $createdBy
            ]);
            
            if ($privilegesResult) {
                // Success - redirect to users.php
                header('Location: http://localhost/KFCBL-Microfinance/CRM/Admin/Treasurer/users.php?success=1');
                exit;
            } else {
                // Delete the role if privileges failed
                $db->execute("DELETE FROM Roles WHERE RoleID = ?", [$roleID]);
                header('Location: http://localhost/KFCBL-Microfinance/CRM/Admin/Treasurer/users.php?error=privileges_failed');
                exit;
            }
        } else {
            header('Location: http://localhost/KFCBL-Microfinance/CRM/Admin/Treasurer/users.php?error=role_failed');
            exit;
        }
        
    } catch (Exception $e) {
        // Log error and redirect
        error_log("User Role Creation Error: " . $e->getMessage());
        header('Location: http://localhost/KFCBL-Microfinance/CRM/Admin/Treasurer/users.php?error=database_error');
        exit;
    }
} else {
    // If not POST request, redirect back
    header('Location: http://localhost/KFCBL-Microfinance/CRM/Admin/Treasurer/users.php');
    exit;
}