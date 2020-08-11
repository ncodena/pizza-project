<?php
// Connect to database

$conn = mysqli_connect('localhost', 'nuria', 'test1234', 'pizza_mania');

// Checking connection

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>