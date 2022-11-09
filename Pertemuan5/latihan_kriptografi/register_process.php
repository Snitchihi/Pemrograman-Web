<?php
// Cek jika form telah di submit, kemudian memassukan data dari form ke users table.
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    // mengenkripsi password menggunakan algoritma hash
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:s");

    //membuat koneksi ke database menggunakan file config.php dengan include_once
    include_once("config.php");

    //Memasukkan data user ke tabel users
    //$conn_db berasal dari config.php
    $result = mysqli_query($conn_db, "INSERT INTO users(username,gender,email,password,created_at)VALUES('$username','$gender','$email','$password','$created')");

    //Menampilkan pesan ketika customer telah ditambah
    echo "Users ". $username  ." added succesfully. <a href='login-page.php>Login</a>";
    if($result){
        header("refresh:5;url=login-page.php" );
        echo 'Succes Register, You will be redirecred to Login page in 5 secs';
    }
}
?>