<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
  
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $itemName = $_POST['itemName'];
        $itemQty = $_POST['itemQty'];
        $itemPrice = $_POST['itemPrice'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "samart_assign";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        $deleteQuery = "DELETE FROM `invoice_item`";
        mysqli_query($conn, $deleteQuery);
        
        $sql = "INSERT INTO `invoice_item` (`itemName`, `itemQty`, `itemPrice`) VALUES ('$itemName', '$itemQty', '$itemPrice')";

        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>';
        }

      }

    }

    
?>

<div class="container mt-3">
<h1>INVOICE CREATED</h1>
    <form action="" method="post">
    <div class="form-group">
        <label for="itemName">ITEM NAME</label>
        <input type="text" name="itemName" class="form-control" id="itemName" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="itemQty">ITEM QUANTITY</label>
        <input type="Number" name="itemQty" class="form-control" id="itemQty" aria-describedby="emailHelp"> 
        
    </div>

    <div class="form-group">
        <label for="itemPrice">PRICE</label>
        <input type="Number" name="itemPrice" class="form-control" id="itemPrice" aria-describedby="emailHelp"> 
    </div>
    
    <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
    <button type="button" class="btn btn-link" onclick="window.location.href='preview.php'">Preview</button>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

