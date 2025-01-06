<?php

// Local Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tecknifydb');

// Database connection
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optionally set default fetch mode
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}

$baseurl = "http://localhost/tecknify/admin/";
// $baseurl = "https://tecknify.com/admin/";
$imgurl = "http://localhost/tecknify/blog-img/";
// $imgurl = "https://tecknify.com/blog-img/";

// Local Url
$tecknify = "http://localhost/tecknify/";
// Live Url
// $tecknify = "https://tecknify.com/";

// Set timezone (optional)
date_default_timezone_set('Asia/Kolkata');

// Enable or disable debugging (set to true to show errors)
define('DEBUG_MODE', true);

// Example function to check if the config is loaded properly
// function getDbConnection() {
//     global $pdo;
//     return $pdo;
// }
?>