<?php
include('../connectivity/connection.php');

echo "hello";
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['desc'];
$quantity =$_POST['quantity'];
$price = $_POST['price'];


$sql = "INSERT INTO item VALUES ($id, '$name', '$description', $quantity , $price )";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Inserted successfully');";
    echo "window.location.href = 'http://localhost/reynolds/Reynolds/AddStock.php';";
    echo "</script>";
    }
?>