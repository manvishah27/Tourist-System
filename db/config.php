<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "intelligent_tourist_system";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>