<?php
// /CRM/System/Config/Backend/DB/db.config.php

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'KFCBL');
define('DB_USER', 'root'); // Change to your MySQL user
define('DB_PASS', '.K3nytt:7&.');
define('DB_CHARSET', 'utf8mb4');
define('DB_PORT', 3306);

// Application URLs
define('BASE_URL', 'http://localhost/KFCBL-Microfinance');
define('LOGIN_URL', BASE_URL . '/index.php');
define('ERROR_REDIRECT', BASE_URL . '/CRM/System/maintenance.html');

// Security
define('MAX_LOGIN_ATTEMPTS', 5);
define('TWOFA_EXPIRY_MINUTES', 10);