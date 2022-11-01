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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <a href="index.php" class="btn btn-danger">Home</a>
    <br><br>

    <form name="update_user" method="POST" action="edit_process.php" class="mt-3 m-2">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?= $name?> class="border rounded-3 border p-2 mb-2 form-control"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?= $email?> class="border rounded-3 border p-2 mb-2 form-control"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value=<?= $phone?> class="border rounded-3 border p-2 mb-2 form-control"></td>
            </tr>
           <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>> </td>
            <td><input type="submit" name="update" value="Update" class="btn btn-secondary float-end mt-3"> </td>
           </tr>
        </table>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>