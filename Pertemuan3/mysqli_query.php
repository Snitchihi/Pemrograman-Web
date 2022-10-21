<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connection Succesfully to Project 1 <BR>";
$query_insert = mysqli_query($connection, "INSERT INTO guru VALUES('','Pratama Yukie Avanshia', 'Wonosaren RT05/RW08','2004-03-26','KUR4515','RPL')");
if(!$query_insert){
    echo("Erorr query " . mysql_error($connection));
}
mysqli_close($connection);
?>