<?php
include('../connectivity/connection.php');
session_start();

$username = $_POST['UserName'];
$password = $_POST['password'];



$sql = "SELECT * FROM user where email='$username' AND password='$password'";


if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);
  if($rowcount>0){
    $_SESSION["current_user"] = $row['name'];
    //set location after combining homepage  
    header("Location:http://localhost/reynolds/Reynolds/Homepage.php");

    

  }

  }

?>