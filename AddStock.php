<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body class="bg-light">
    <section>
        <div class="info">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
            <div class="alert alert-info alert-dismissible box" style="max-width: 25rem;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Steps to Add New Stock</strong> 
                <ul>
                    <li>Enter the id of a particular item you want to add</li>
                    <li>Enter the corresponding name of the item</li>
                    <li>Give a description to that item</li>
                    <li>Enter the quantity you want to add</li>
                    <li>Enter the price of the item</li>
                    <li>Click "ADD TO STOCK"</li>
                </ul></div>
              </div>
              <div class="col-sm-4">
              <div class="alert alert-info alert-dismissible box" style="max-width: 25rem;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Steps to Update Existing Stock</strong> 
                <ul>
                    <li>Enter the id of a particular item you want to update</li>
                    <li>Enter the quantity you want to add</li>
                    <li>Click "UPDATE TO STOCK"</li>
                </ul>
            </div></div></div></div>
                
            
        </div>
        
    </section>
    <button class="btn btn-outline-warning box" onclick="openForm()">New Stock</button>
    <div class="form-popup" id="myForm">
        <form class="form-container1" method="POST" action="http://localhost/reynolds/Reynolds/php/stock_add/stockadd.php">
          <h1>ADD</h1>
      
          <label for="id"><b>ID</b></label>
          <input type="number" placeholder="Enter item ID" name="id" required>
      
          <label for="name"><b>NAME</b></label>
          <input type="text" placeholder="Enter item Name" name="name" required>
            
          <label for="description"><b>DESCRIPTION</b></label>
          <input type="text" placeholder="Enter item Description" name="desc" required>
           
          <label for="quantity"><b>QUANTITY</b></label>
          <input type="number" placeholder="Enter item Quantity" name="quantity" required>

          <label for="price"><b>COST</b></label>
          <input type="number" placeholder="Enter item Price" name="price" required>

          <button type="submit" class="btn">ADD TO STOCK</button>
          <button type="button" class="btn cancel" onclick="closeForm()">CANCEL</button>
        </form>
      </div>
      <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
          document.getElementById("myForm1").style.display="none";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>

<button class="btn btn-outline-danger box" onclick="openForm1()">Update Stock</button>
<div class="form-popup" id="myForm1">
    <form class="form-container1"  method="POST" action="http://localhost/reynolds/Reynolds/php/stock_update/stockupdate.php">
      <h1>UPDATE</h1>
  
      <label for="id"><b>ID</b></label>
      <input type="number" placeholder="Enter item ID" name="id" required>
              
      <label for="quantity"><b>QUANTITY</b></label>
      <input type="number" placeholder="Enter item Quantity" name="quantity" required>

      <button type="submit" class="btn">UPDATE TO STOCK</button>
      <button type="button" class="btn cancel" onclick="closeForm1()">CANCEL</button>
    </form>
  </div>
  <script>
    function openForm1() {
      document.getElementById("myForm1").style.display = "block";
      document.getElementById("myForm").style.display="none";
    }
    
    function closeForm1() {
      document.getElementById("myForm1").style.display = "none";
    }
    </script>
</body>
</html>