<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connection Succesfully to Project 1 <BR>";

$query = mysqli_query($connection, "SELECT id, nama_lengkap, jurusan FROM guru");

if(!$query) {
    echo ("Error query " . mysqli_error($connection));
}

echo "<br> Hasil numerik <br>";
while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
    print "ID : " . $data[0] . "<br>";
    print "NAMA LENGKAP : " . $data[1] . "<br>";
    print "JURUSAN : " . $data[2] . "<br>";
}

mysqli_close($connection);