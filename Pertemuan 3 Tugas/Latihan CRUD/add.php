<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Add Customer</title>
</head>
<body>
    
    <a href="index.php"><button type="button" class="btn btn-danger m-2">Back</button></a>
    <br><br>

    <form action="add_process.php" method="POST" name="form1" class="mt-3 m-2">
        <table width="35%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" class="border rounded-3 border p-2 mb-2 form-control"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" class="border rounded-3 border p-2 mb-2 form-control"> </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" class="border rounded-3 border p-2 mb-2 form-control"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add" class="btn btn-secondary float-end mt-3"> </td>
            </tr>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>