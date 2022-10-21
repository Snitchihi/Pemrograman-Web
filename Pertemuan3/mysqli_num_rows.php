<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connection Succesfully to Project 1 <BR>";
$query = mysqli_query($connection, "SELECT * FROM guru");
if(!$query){
    echo ("Error query " . mysqli_error($connection));
}else {
    $num_of_rec = mysqli_num_rows($query);
    echo "Number of Records = " . $num_of_rec;
}
mysqli_close($connection);

?>