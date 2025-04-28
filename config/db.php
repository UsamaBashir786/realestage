<?php
// Database configuration
$servername = "localhost"; // Hostname of the MySQL server
$username = "root";        // MySQL username
$password = "";            // MySQL password (leave empty if no password is set)
$dbname = "newvilla_db";   // Name of the database

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}