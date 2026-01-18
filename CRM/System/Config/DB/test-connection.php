<?php
// test-connection.php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Database.php';

$db = Database::getInstance();

if ($db->getConnection()) {
    echo "✅ Database connection successful!<br>";
    
    // Test a simple query
    try {
        $result = $db->selectSingle("SELECT DATABASE() as db_name");
        echo "✅ Database: " . $result['db_name'] . "<br>";
        
        // Check if Users table exists
        $tables = $db->select("SHOW TABLES");
        echo "✅ Found " . count($tables) . " table(s)<br>";
        
    } catch (Exception $e) {
        echo "❌ Query error: " . $e->getMessage() . "<br>";
    }
    
} else {
    echo "❌ Connection failed<br>";
    echo "Error: " . $db->getError() . "<br>";
}
?>