<?php
// Database configuration
$dbHost     = "us-cdbr-iron-east-01.cleardb.net";
$dbUsername = "b31804a121552f";
$dbPassword = "a7469f36";
$dbName     = "heroku_10bd02a6460258e";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>