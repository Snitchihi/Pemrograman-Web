<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:login_page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<body>
    <h1><p align=center> Hello, Selamat Datang <?= $_SESSION['username']; ?>!!!</p></h1>
    <p align=center> Kamu berada di halaman <b>Admin</b></p>
    <br><h3><p align=center><a href='logout.php'>Logout</a></p></h3>
</body>
</html>