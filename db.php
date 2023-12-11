<?php
$host = "localhost";
$db_name = "course-management-system";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>