<?php
include('./php/connectivity/connection.php');
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Welcome <?php session_start(); echo $_SESSION["current_user"] ?></h2>
            <ul>
                <li><a href="Homepage.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="Stock.php"><i class="fas fa-cubes"></i>Stock</a></li>
                <li><a href="Purchase.php"><i class="fas fa-shopping-cart"></i>Purchases</a></li>
                <li><a href="RequestList.php"><i class="fas fa-clipboard-list"></i>Request Lists</a></li>
                <li><a href="UsageReport.php"><i class="fas fa-file-alt"></i>Usage Report</a></li>

            </ul>

        </div>
        <div class="main_content">
            <div class="header">VIEW STOCK</div>
            <table class="table text-center  table-bordered table-hover">
                <div class="table responsive">
                    <tbody>
                        <?php
        $getTS = mysqli_query($conn, "SELECT * FROM item");
        
        echo "<tr>";
          echo "<th>ITEM ID</th>";
          echo "<th>NAME</th>";
          echo "<th>DESCRIPTION</th>";
          echo "<th>QUANTITY</th>";
          echo "<th>PRICE</th>";
          echo "</tr>";

        while ($row = mysqli_fetch_array($getTS)) {
          echo "<tr>";
          echo "<td>".$row['item_id']."</td>";
          echo "<td>".$row['name']."</td>";
          echo "<td>".$row['desc']."</td>";
          echo "<td>".$row['quantity']."</td>";
          echo "<td>".$row['price']."</td>";
          echo "</tr>";
        }
        ?>
                    </tbody>
                </div>
            </table>

            <form method="get" class="form-container1"
                action="http://localhost/reynolds/Reynolds/php/stock_report/stock_report.php">
                <button type="submit" class="btn">Generate excel</button>
            </form>


        </div>

</body>

</html>