<?php
/**
 * Database Connection using PDO MySQL
 * Shree Ashirwad Packers and Movers
 */

require_once __DIR__ . '/config.php';

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'shreeashirwad_db';

$pdo = null;

try {
    // Attempt PDO connection to MySQL
    $pdo = new PDO("mysql:host={$db_host};charset=utf8mb4", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_TIMEOUT => 3
    ]);

    // Ensure database exists
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `{$db_name}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    $pdo->exec("USE `{$db_name}`");

    // Ensure leads table exists
    $pdo->exec("CREATE TABLE IF NOT EXISTS `leads` (
        `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(150) NOT NULL,
        `phone` VARCHAR(30) NOT NULL,
        `email` VARCHAR(150) DEFAULT NULL,
        `moving_from` VARCHAR(150) DEFAULT NULL,
        `moving_to` VARCHAR(150) DEFAULT NULL,
        `service_type` VARCHAR(100) DEFAULT 'Residential Shifting',
        `message` TEXT DEFAULT NULL,
        `source_url` VARCHAR(255) DEFAULT '/',
        `ip_address` VARCHAR(45) DEFAULT NULL,
        `user_agent` VARCHAR(255) DEFAULT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");

} catch (PDOException $e) {
    // If MySQL server is unavailable or credentials differ, log silently and fall back
    error_log("Database connection note: " . $e->getMessage());
    $pdo = null;
}
