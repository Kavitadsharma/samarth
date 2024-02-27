<?php
// fetch_invoice_data.php

include('database connection.php');
$subtotal = 0;
$subtotal = 0;
$subtotalLessDiscount = 0; // Initialize the variable
$totaltax = 0; // Initialize the variable

$htmlTbody = "";

while ($row = mysqli_fetch_assoc($result)) {
    $htmlTbody .= "<tr>";
    $htmlTbody .= "<td>" . $row['id'] . "</td>";
    $htmlTbody .= "<td>" . $row['itemName'] . "</td>";
    $htmlTbody .= "<td>" . $row['itemQty'] . "</td>";
    $htmlTbody .= "<td>" . $row['itemPrice'] . "</td>";
    $htmlTbody .= "<td id='total" . $row['id'] . "'>" . ($row['itemQty'] * $row['itemPrice']) . "</td>";
    $htmlTbody .= "</tr>";
    
    $subtotal += $row['itemQty'] * $row['itemPrice'];
    $subtotalLessDiscount+=$subtotal*0.95;
    $totaltax+=$subtotalLessDiscount*1.05;
}
echo "<script>document.getElementById('subtotal').dispatchEvent(new Event('input'));</script>";
echo "<script>document.getElementById('subtotalLessDiscount').dispatchEvent(new Event('input'));</script>";
echo "<script>document.getElementById('totaltax').dispatchEvent(new Event('input'));</script>";
$htmlTbody .= "<tr class='item-row'>
                <td colspan='4'>Subtotal</td>
                <td contenteditable='true' id='subtotal'>$subtotal</td>
            </tr>
            <tr class='item-row'>
                <td colspan='4'>Discount</td>
                <td contenteditable='true' id='discount'>5%</td>
            </tr>
            <tr class='item-row'>
                <td colspan='4'>SubTotal Less Discount</td>
                <td contenteditable='true' id='subtotalLessDiscount'>$subtotalLessDiscount</td>
            </tr>
            <tr class='item-row'>
                <td colspan='4'>Tax Rate</td>
                <td contenteditable='true' id='taxRate'>5%</td>
            </tr>
            <tr class='item-row'>
                <td colspan='4'>Total tax</td>
                <td contenteditable='true' id='totalTax'>$totaltax</td>
            </tr>
            <tr class='item-row' style='background-color: blue;'>
                <td colspan='4'>BALANCE DUE</td>
                <td contenteditable='true' id='balanceDue'>$totaltax</td>
            </tr>";

// Output the entire HTML for tbody
echo $htmlTbody;
?>

