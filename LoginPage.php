<!DOCTYPE html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">

        <div class="row justify-content-center">
                <div>
                    
                    <h2><img src="logo.jpg" width="120" height="120"><b>Reynolds Pens India Private Limited,Irungattukottai</b></h2><br>

                </div>
            <div class="col-12 col-sm-6 col-md-3">
            
                <form class="form-container" action="http://localhost/reynolds/Reynolds/php/login/login.php" method="POST">
                

                    <div class="form-group">
                        <label for="Uname" class="text-muted">User Name</label>
                        <input type="text" class="form-control" id="Uname" name="UserName" required>

                    </div>
                    <div class="form-group">
                        <label for="Password" class="text-muted">Password</label>
                        <input type="password" class="form-control" id="Password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <p></p>
                    <p class="text-secondary">Don't have an account?<br><a href="http://localhost/reynolds/Reynolds/Registration.php">Click here</a></p>
                </form>

            </div>
                        <div class="col-12 col-sm-6 col-md-3 logo-rec">
                            <h5>powered by<img src="logo2.png" alt="" width="130" height="72"></h5>
                        </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>