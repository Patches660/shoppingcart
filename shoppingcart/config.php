<?php

$base_url = "http://localhost/all/shoppingcart"; 

$servername = "localhost"; // Change if necessary
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$database = "shoppingcart"; // Change to your actual database name

$conn = mysqli_connect($servername, $username, $password, $database);
$dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4"; // Use $servername and $database here

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
