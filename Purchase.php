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
            <li><a href="#"><i class="fas fa-shopping-cart"></i>Purchases</a></li>
            <li><a href="RequestList.php"><i class="fas fa-clipboard-list"></i>Request Lists</a></li>
            <li><a href="UsageReport.php"><i class="fas fa-file-alt"></i>Usage Report</a></li>

        </ul> 
        
    </div>
    <div class="main_content">
    <div class="header"><img src="logo.jpg" width="100" height="100"> PENS INDIA PRIVATE LIMITED</div>  
        <div class="info">
          
      </div>
    </div>
</div>

</body>
</html>