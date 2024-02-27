<?php
include('database connection.php');
include('fetch_data.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        #header {
            display: table;
            width: 100%;
            background-color: #fff;
        }

        #header > div {
            display: table-cell;
            vertical-align: middle;
        }

        #header > div:first-child {
            text-align: left;
            padding-left: 10px; /* Adjust as needed */
        }

        #header > div:last-child {
            text-align: right;
            padding-right: 10px; /* Adjust as needed */
        }

        #second {
            display: table;
            width: 100%;
        }

        #second > div {
            display: table-cell;
            vertical-align: middle;
        }

        #sone {
            text-align: left;
            padding-left: 10px; /* Adjust as needed */
        }

        #stwo {
            text-align: right;
            padding-right: 10px; /* Adjust as needed */
        }

        table {
  border-collapse: collapse;
  width: 100%;

}
td{
    border: 2px solid ;  
}

th{
  border: 2px solid ;
color:white;
  text-align: left;
}

th {
  background-color: blue;
}

        p {
            margin-top: 20px;
        }
    </style>
    

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
                <th>ID</th>
                <th>Item Name</th>
                <th>QTY</th>
                <th>UNIT PRICE</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <!-- DATA_PLACEHOLDER -->
            
        </tbody>
    </table>

    <div>
        <p>Thanks for your business.</p>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to calculate and update values
        function calculateValues() {
           
            var subtotal = parseFloat(document.getElementById('subtotal').innerText);

            // Calculate 5% discount
            var discountPercentage = 5;
            var discount = (subtotal * discountPercentage) / 100;

            // Calculate SubTotal Less Discount
            var subtotalLessDiscount = subtotal - discount;

            // Calculate 8% tax rate
            var taxRatePercentage = 8;
            var totalTax = (subtotalLessDiscount * taxRatePercentage) / 100;

            // Calculate Balance Due
            var balanceDue = subtotalLessDiscount + totalTax;

            // Update the HTML elements
            document.getElementById('discount').innerText = discount.toFixed(2);
            document.getElementById('subtotalLessDiscount').innerText = subtotalLessDiscount.toFixed(2);
            document.getElementById('taxRate').innerText = totalTax.toFixed(2);
            document.getElementById('balanceDue').innerText = balanceDue.toFixed(2);
        }

        // Add event listener for changes in subtotal
        var subtotalElement = document.getElementById('subtotal');
        subtotalElement.addEventListener('input', calculateValues);
    });
</script>
</html>
