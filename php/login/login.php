<?php
include('../connectivity/connection.php');

$username = $_POST['UserName'];
$password = $_POST['password'];



$sql = "SELECT * FROM user where email='$username' AND password='$password'";


if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  
  if($rowcount>0){
    //set location after combining homepage  
    //header("Location:Homepage.html");

    echo "Logged in";

  }

  }

?> 