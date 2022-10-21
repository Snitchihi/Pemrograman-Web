<?php 
include_once("config.php");

$id= $_GET['id'];

$result = mysqli_query($conn_db, "SELECT * FROM customer where id=$id");
if(!$result){
    header("Location:index.php");
}

while($customer_data = mysqli_fetch_array($result))
{
    $name = $customer_data['name'];
    $email = $customer_data['email'];
    $phone = $customer_data['phone'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer Data</title>
</head>
<body>
    <a href="index.php">Home</a>
    <br><br>

    <form name="update_user" method="POST" action="edit_process.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?= $name?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?= $email?>></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value=<?= $phone?>></td>
            </tr>
           <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>> </td>
            <td><input type="submit" name="update" value="Update"> </td>
           </tr>
        </table>
    </form>
</body>
</html>