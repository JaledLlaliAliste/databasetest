<?php
// Replace the placeholders with your MySQL database information
$servername = "10.100.182.39";
$username = "root";
$password = "root";
$dbname = "mysql";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    // If there's an error, return an error message
    die("Connection failed: " . $conn->connect_error);
} else {
    // If the connection is successful, return a success message
    echo "Connection successful!";
}
?>
