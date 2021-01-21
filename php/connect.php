<?php
$servername = "localhost";
$username = "id12836224_root";
$password = "#include";
$dbname = "id12836224_car";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>