<?php
// Display all errors during development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define site-wide constants (if needed)
define('SITE_NAME', 'Your Website Name');
define('BASE_URL', 'http://localhost/Adonistech/Adonis-html');

// Database configuration (if using a database)
$db_host = 'localhost';  // Database host
$db_user = 'root';       // Database username
$db_pass = '';           // Database password
$db_name = 'Adonistech';  // Database name

// Create a connection to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally: Set the character encoding to UTF-8 for security and consistency
$conn->set_charset('utf8');

// Example usage: If you need to query the database, you can use $conn in your pages
?>

