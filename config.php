<?php
// Local Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tecknifydb";

// Live Database configuration
/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database"; */

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>