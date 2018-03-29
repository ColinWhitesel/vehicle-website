<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "vehicle_management";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


mysqli_query($conn, "SET NAMES utf8");


?>