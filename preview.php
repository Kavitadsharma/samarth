<?php
include('database connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="./stylesheet.css">
</head>

<body>
<div id="header">
        <div id="first">
            <h4>Samarth</h4>
            <p>123 Street Address, City, State, Zip/Post<br>
                website, email<br>
                Phone number</p>
        </div>
        <div id="ftwo">
            <h1>LOGO</h1>
        </div>
    </div>

    <div id="second">
        <div id="sone">
            <p>Bill To<br>
                <b>Contact Name</b><br>
                Samarth<br>
                Address<br>
                Phone, Email<br>
            </p>
        </div>
        <div id="stwo">
            <p>
                Invoice Date : 11/01/2024<br><br>
                Date : 12/01/2024 <br>
            </p>
        </div>
    </div>

 
      
        <table>
            <thead>
                <tr>
                    <th id="id">ID</th>
                    <th id="itemName">Item Name</th>
                    <th id="itemQty">QTY</th>
                    <th id="itemPrice">UNIT PRICE</th>
                    <th id="total">TOTAL</th>
                
                </tr>
            </thead>
            <tbody>
            <?php include('fetch_data.php'); ?>
           
            </tbody>
        </table>
   

    <div>
 
        <p>
     Thanks for your business.</p>
    </div>
    <button type="button" class="btn btn-link" onclick="window.location.href='pdf.php'">PRINT</button>
</body>


</html>