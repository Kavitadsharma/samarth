<?php
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
    echo "<br>";
}

$sql = "SELECT * FROM `invoice_item`";
$result = mysqli_query($conn, $sql);
?>