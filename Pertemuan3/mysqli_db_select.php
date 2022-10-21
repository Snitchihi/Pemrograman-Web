<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connection Succesfully to Project1 <br>";

$connection_2 = mysqli_select_db($connection, "project2");
if(!$connection_2) {
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connection Succesfully to Project2";
?>