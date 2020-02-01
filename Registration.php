<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body >
        <div class="container">
      
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-3">
                    <form class="form-container">
                            
                            <div class="form-group">
                              <label for="Name" class="text-muted">Name</label>
                              <input type="text" class="form-control" id="name" name="Name" required>
                              
                            </div>
                            <div class="form-group">
                                    <label for="email" class="text-muted">Email</label>
                                    <input type="email" class="form-control" id="email" name="Email" required>
                                    
                                  </div>
                            <div class="form-group">
                                <label for="Department" class="text-muted">Department</label>
                                <select class="form-control" id="Department">
                                    <option>Department1</option>
                                    <option>Department2</option>
                                    <option>Department3</option>
                                    <option>Department4</option>

                                </select>

                            </div>
                            <div class="form-group">
                              <label for="Password" class="text-muted">Password</label>
                              <input type="password" class="form-control" id="Password" name="password" required>
                            </div>
                            <div class="form-group">
                                    <label for="CPassword" class="text-muted">Confirm Password</label>
                                    <input type="password" class="form-control" id="CPassword" name="Cpassword" required>
                                  </div>
                            
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <p></p>
                            <p class="text-secondary">Existing User?<br><a href="LoginPage.html">Click here</a></p>
                          </form>
        
                          </div>
                          
                          </div>
                          </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>