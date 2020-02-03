<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
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
            <div class="header">REQUEST LIST</div>
            <div class="info">
                <form class="form-container1" method="POST"
                    action="http://localhost/reynolds/Reynolds/php/material_request_report/add_request.php">
                    <h1>MATERIAL REQUEST FORM</h1>

                    <label for="id"><b>ID</b></label>
                    <input type="number" placeholder="Enter item ID" name="id" required>

                    <label for="quantity"><b>QUANTITY</b></label>
                    <input type="number" placeholder="Enter item Quantity" name="quantity" required>

                    <label for="quantity"><b>NEED DATE</b></label>
                    <input type="date" placeholder="Enter need date" name="need_date" required>

                    <button type="submit" name="additem" class="btn">ADD ITEM</button>

                    <button type="reset" class="btn cancel">RESET</button>
                </form>
                <form class="form-container1" method="POST"
                    action="http://localhost/reynolds/Reynolds/php/material_request_report/request_report.php">
                    <button type="submit" class="btn">GENERATE REPORT</button>
                </form>
            </div>
        </div>
    </div>
</body>