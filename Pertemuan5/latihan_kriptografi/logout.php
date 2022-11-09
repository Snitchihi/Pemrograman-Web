<?php
session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    echo '<script>
    alert("Anda berhasil Logout");
    window.location="login_page.php";
    </script>';
} else{
    header("location:login_page.php");
    exit();
}