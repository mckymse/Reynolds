<html>
    <head>
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    </head>
    <body>
    <form class="form-container1">
      <h1>REQUEST AN ITEM</h1>
        <br>
      <label for="date"><b>REQUESTED DATE</b></label><br>
      <input type="date" name="date" required><br><br>

      <label for="name"><b>REQUESTED BY</b></label><br>
      <input type="text" name="name" placeholder="Requester UserID" required><br><br>
  
      <label for="id"><b>ID</b></label><br>
      <input type="number" placeholder="Enter item ID" name="id" required><br><br>
              
      <label for="quantity"><b>QUANTITY</b></label><br>
      <input type="number" placeholder="Enter item Quantity" name="quantity" required><br><br>

      <label for="date1"><b>EXPECTED DATE TO BE DELIEVERED</b></label><br>
      <input type="date" name="date1" required><br><br>

      <button type="submit" class="btn">REQUEST THE ITEM</button>
      
    </form>
    </body>
</html>