<?php 

session_start();

$_SESSION['nama'] = "Pratama Yukie Avanshia";

$_SESSION['absen'] = 18;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan session</title>
</head>
<body>
    <?php
    echo "Nama saya adalah " . $_SESSION['nama'] . "<br>". "Nomor absen ". $_SESSION['absen'];
    ?>
</body>
</html>