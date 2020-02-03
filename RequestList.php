<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
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
                <li><a href="#"><i class="fas fa-clipboard-list"></i>Request Lists</a></li>
                <li><a href="UsageReport.php"><i class="fas fa-file-alt"></i>Usage Report</a></li>
            </ul>

        </div>
        <div class="main_content">
        <div class="header"><img src="logo.jpg" width="100" height="100"> PENS INDIA PRIVATE LIMITED</div>
            <div class="info">
                <div class="card-deck">
                    <div class="card border-warning text-warning" style="max-width: 18rem;">
                        <div class="card-body">
                            <i class="fas fa-shopping-basket fa-5x "></i>
                            <h3 class="card-title text-right">REQUEST</h3>
                            <a href="Request.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="card border-dark text-dark" style="max-width: 18rem;">
                        <div class="card-body">
                            <i class="fas fa-list-alt fa-5x"></i>
                            <h3 class="card-title text-right">REQUEST LIST</h3>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>