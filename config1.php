<?php

$conn = mysqli_connect("localhost", "root", "", "reglog");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>