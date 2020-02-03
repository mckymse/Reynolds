<?php
include('../connectivity/connection.php');


$id = $_POST['id'];
$quantity =$_POST['quantity'];


$sql = "UPDATE item SET quantity=$quantity where item_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Updated successfully');";
    echo "window.location.href = 'http://localhost/reynolds/Reynolds/AddStock.php';";
    echo "</script>";
    }
?>