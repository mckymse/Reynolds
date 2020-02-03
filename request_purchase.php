<html>
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
    <div class="container-fluid">
    <div class="info">
                <form class="form-container1" >
                    <h1>REQUEST TO PURCHASE MATERIAL</h1>

                    <label for="user_name"><b>NAME</b></label>
                    <input type="text" placeholder="Enter Requestor Name" name="name" required>

                    <div class="form-group">
                        <label for="Department" class="text-muted">DEPARTMENT</label>
                        <select class="form-control" id="Department" name="department">
                                    <option>Department1</option>
                                    <option>Department2</option>
                                    <option>Department3</option>
                                    <option>Department4</option>

                                </select>

                    </div>
                    

                    <label for="id"><b>ID</b></label>
                    <input type="number" placeholder="Enter item ID" name="id" required>

                    <label for="quantity"><b>QUANTITY</b></label>
                    <input type="number" placeholder="Enter item Quantity" name="quantity" required>

                    <label for="quantity"><b>NEED DATE</b></label>
                    <input type="date" placeholder="Enter need date" name="need_date" required>

                    <button type="submit" name="additem" class="btn">REQUEST PURCHASE</button>

                    <button type="reset" class="btn cancel">RESET</button>
                </form>
                
            </div>



    </div>
</body>


</html>