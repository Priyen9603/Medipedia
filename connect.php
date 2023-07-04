<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// connect database

$dbname = "medipedia"; 
mysqli_select_db($conn, $dbname);
if (!$conn) {
    die("Database selection failed: " . mysqli_error());
}
// echo "Database selected successfully<br>";

?>
