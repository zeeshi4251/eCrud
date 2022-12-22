<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecrud";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry Your brower did not work");
}



?>