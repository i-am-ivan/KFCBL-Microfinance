<?php
// /CRM/System/Config/Backend/Components/error_handler.php

/**
 * Display errors array
 */
function displayErrors() {
    global $errors;
    if (!empty($errors)) {
        echo '<div class="error-container">';
        foreach ($errors as $error) {
            echo '<div class="error-message">' . htmlspecialchars($error) . '</div>';
        }
        echo '</div>';
    }
}

/**
 * Log error
 */
function logError($message) {
    $logFile = dirname(__DIR__) . '/DB/error_log.log';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message\n";
    error_log($logMessage, 3, $logFile);
}
?>