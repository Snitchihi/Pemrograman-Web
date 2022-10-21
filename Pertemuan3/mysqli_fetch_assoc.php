<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connection Succesfully to Project 1 <BR>";

$query = mysqli_query($connection, "SELECT id, nama_lengkap, jurusan FROM guru");

if(!$query) {
    echo ("Error query " . mysqli_error($connection));
}
$data = mysqli_fetch_assoc($query);
print_r($data);

mysqli_close($connection);
?>