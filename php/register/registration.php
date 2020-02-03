<?php
include('../connectivity/connection.php');

$name = $_POST['Name'];
$email = $_POST['Email'];
$department = $_POST['department'];
$password = $_POST['password'];
$cpassword = $_POST['Cpassword'];

$sql = "INSERT INTO USER (name, email, password,dept) VALUES ('$name', '$email', '$password','$department')";

if ($conn->query($sql) === TRUE) {
echo "<script>alert('Registered successfully');";
echo "window.location.href = 'http://localhost/reynolds/Reynolds/LoginPage.php';";
echo "</script>";
}




?>