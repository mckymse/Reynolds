<?php

include('../connectivity/connection.php');

$id = $_POST['id'];
$quantity = $_POST['quantity'];
$rawdate = htmlentities($_POST['need_date']);
$date = date('Y-m-d', strtotime($rawdate));
$current_stock = mysqli_query($conn, "select quantity from item where item_id = $id");
$row = mysqli_fetch_array($current_stock);
if($row['quantity'] < $quantity){
    echo "<script>
    if (confirm('Requested stock quantity is not greater than current availablity. Do you want to place request to replace stock?')) {
        window.location.href = 'http://localhost/reynolds/Reynolds/request_purchase.php';
      } else {
        window.location.href = 'http://localhost/reynolds/Reynolds/RequestList.php';
      } 
      </script>";
}
else{
    $sql = "UPDATE item SET quantity=$row[quantity]-$quantity where item_id=$id";
    mysqli_query($conn, $sql);
    $get_items = mysqli_query($conn, "SELECT name, desc FROM item where item_id = $id");
    $name = $get_items['name'];
    $desc = $get_items['desc'];
    $sql = "INSERT INTO material_request VALUES (NULL, curdate(), 4, $id, $quantity, '$date' )";
    if ($conn->query($sql) === TRUE) {
        echo "alert('Inserted successfully');";
        echo "window.location.href = 'http://localhost/reynolds/Reynolds/RequestList.php';";
        echo "";
        }
    else{
        die(mysqli_error($conn));
    }
}
?>