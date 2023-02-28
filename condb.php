<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$db = "qlsv";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
mysqli_set_charset($conn,"utf8mb4");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>