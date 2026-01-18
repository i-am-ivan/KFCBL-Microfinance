<?php
// /CRM/System/Config/Backend/DB/Database.php

require_once __DIR__ . '/db.config.php';

class Database {
    private static $instance = null;
    private $connection;
    private $error = null;
    
    private function __construct() {
        $this->connect();
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    private function connect() {
        try {
            $dsn = "mysql:host=" . DB_HOST . 
                   ";dbname=" . DB_NAME . 
                   ";charset=" . DB_CHARSET . 
                   ";port=" . DB_PORT;
            
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            
            $this->connection = new PDO($dsn, DB_USER, DB_PASS, $options);
            
        } catch (PDOException $e) {
            $this->error = "Database connection failed";
            error_log("DB Connection Error: " . $e->getMessage());
            header('Location: ' . ERROR_REDIRECT);
            exit;
        }
    }
    
    public function getConnection() {
        return $this->connection;
    }
    
    public function select($sql, $params = []) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            $this->logError($e, $sql);
            return false;
        }
    }
    
    public function selectSingle($sql, $params = []) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (PDOException $e) {
            $this->logError($e, $sql);
            return false;
        }
    }
    
    public function execute($sql, $params = []) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            $this->logError($e, $sql);
            return false;
        }
    }
    
    public function lastInsertId() {
        return $this->connection->lastInsertId();
    }
    
    private function logError($e, $sql) {
        $logMessage = date('Y-m-d H:i:s') . " - SQL Error: " . $e->getMessage() . " | SQL: " . $sql;
        error_log($logMessage, 3, dirname(__FILE__) . '/error_log.log');
    }
    
    public function getError() {
        return $this->error;
    }
}