<?php

include 'db.php';

$matric = mysqli_real_escape_string($conn, $_POST['matric']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
$accessLevel = $_POST['accessLevel'];

$query = "INSERT INTO users (matric, name, password, accessLevel) VALUES ('$matric', '$name', '$password', '$accessLevel')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Registration successful";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
