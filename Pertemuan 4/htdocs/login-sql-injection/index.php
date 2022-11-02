<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test_yukie";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn){
    die("Unnable to connect");
}
if ($_POST){
   $uname = $_POST["username"] ;
   $pass = $_POST["password"];
   //Membuat SQL injection tidak berjalan
   $uname = mysqli_escape_String($conn, $uname); //test or 1=1
   $pass = mysqli_escape_String($conn, $pass);
   $sql = "SELECT * FROM user_tutorials_yukie WHERE username ='$uname' AND password='$pass'";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) == 1) {
    echo "Welcome, " .$uname. "!";
   }else{
    echo "Incorrect Username or Password!";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal</title>
    <style type="text/css">
        input[type=text],
        input[type=password] {
            padding: 16px;
            margin: 6px;
            border: 1px solid #f1f1f1;
            letter-spacing: 1px;
            border-radius: 3px;
            width: 240px;
        }

        input[type=submit] {
            margin-left: 8px;
            width: 274px;
            border-radius: 3px;
            border: 1px solid #4285f4;
            background-color: #4285f4;
            padding: 16px;
            color: white;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>
<form action method="POST" autocomplete="off">
    <input type="text" name="username" placeholder="Input your Username" /><br>
    <input type="password" name="password" placeholder="Input your Password" /><br>
    <input type="submit" name="login" value="LOGIN" />
</form>

<body>

</body>

</html>