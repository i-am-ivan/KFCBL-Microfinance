<?php
// /CRM/System/Config/Backend/Controllers/userRoles.functions.php

require_once dirname(__DIR__, 2) . '/DB/Database.php';

function fetchUserRolesData() {
    try {
        $db = Database::getInstance();
        
        $sql = "SELECT 
                    r.RoleID,
                    r.RoleName,
                    r.CreatedOn,
                    r.CreatedBy,
                    r.Status,
                    r.UpdatedAt as RoleUpdatedAt,
                    
                    rp.BodabodaCreate,
                    rp.BodabodaRead,
                    rp.BodabodaUpdate,
                    rp.BodabodaDelete,
                    
                    rp.LoansCreate,
                    rp.LoansRead,
                    rp.LoansUpdate,
                    rp.LoansDelete,
                    
                    rp.LandsCreate,
                    rp.LandsRead,
                    rp.LandsUpdate,
                    rp.LandsDelete,
                    
                    rp.UpdatedAt as PrivilegesUpdatedAt
                    
                FROM Roles r
                LEFT JOIN RolePrivileges rp ON r.RoleID = rp.RoleID
                WHERE RoleName != 'IT'
                ORDER BY r.CreatedOn DESC";
        
        $results = $db->select($sql);
        
        if ($results) {
            $formattedData = [];
            foreach ($results as $row) {
                $formattedData[] = [
                    'UserRoleID' => $row['RoleID'],
                    'userRole' => $row['RoleName'],
                    'CreatedOn' => $row['CreatedOn'],
                    'CreatedBy' => $row['CreatedBy'],
                    'Status' => $row['Status'],
                    
                    'BodabodaCreate' => (bool)$row['BodabodaCreate'],
                    'BodabodaRead' => (bool)$row['BodabodaRead'],
                    'BodabodaUpdate' => (bool)$row['BodabodaUpdate'],
                    'BodabodaDelete' => (bool)$row['BodabodaDelete'],
                    
                    'LoansCreate' => (bool)$row['LoansCreate'],
                    'LoansRead' => (bool)$row['LoansRead'],
                    'LoansUpdate' => (bool)$row['LoansUpdate'],
                    'LoansDelete' => (bool)$row['LoansDelete'],
                    
                    'LandsCreate' => (bool)$row['LandsCreate'],
                    'LandsRead' => (bool)$row['LandsRead'],
                    'LandsUpdate' => (bool)$row['LandsUpdate'],
                    'LandsDelete' => (bool)$row['LandsDelete'],
                    
                    'UpdatedAt' => $row['PrivilegesUpdatedAt'] ?: $row['RoleUpdatedAt']
                ];
            }
            
            return [
                'success' => true,
                'data' => $formattedData
            ];
            
        } else {
            return [
                'success' => false,
                'message' => 'No roles found',
                'data' => []
            ];
        }
        
    } catch (Exception $e) {
        return [
            'success' => false,
            'message' => 'Database error: ' . $e->getMessage(),
            'data' => []
        ];
    }
}

function countUserRolesExcludingIT() {
    try {
        $db = Database::getInstance();
        
        // Count all roles excluding "IT" role
        $sql = "SELECT COUNT(*) as total_roles FROM Roles WHERE RoleName != 'IT'";
        $result = $db->selectSingle($sql);
        
        return $result ? (int)$result['total_roles'] : 0;
        
    } catch (Exception $e) {
        error_log("Count user roles error: " . $e->getMessage());
        return 0;
    }
}
