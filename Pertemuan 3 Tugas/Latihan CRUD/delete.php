<?php 
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn_db, "DELETE FROM customer WHERE id=$id");
if($result){
    $message = "Berhasil menghapus data customer";
}else{
    $message = "Gagal menghapus data customer";
}
header("Location:index.php?message=" .$message);
?>