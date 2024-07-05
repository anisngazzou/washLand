<?php
$servername = "localhost";
$database = "globalcouverture";
$username = "admin";
$password = "";
// Create connection
$c = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$c) {
    die("Connection failed: " . mysqli_connect_error());
}


?>