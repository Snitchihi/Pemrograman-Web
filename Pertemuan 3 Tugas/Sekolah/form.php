<?php

include 'connection.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$query = "INSERT INTO siswa(NIS, nama_lengkap, alamat, kelas, jurusan) VALUES ('".$nis. "', '".$nama."', '".$alamat."', '".$kelas."', '".$jurusan."')";

$mysqli = mysqli_query($connection, $query);
if($mysqli){
echo '<script>alert("Data berhasil masuk");
        window.location="form-page.php";
        </script>';
}
        mysqli_close($connection);
?>