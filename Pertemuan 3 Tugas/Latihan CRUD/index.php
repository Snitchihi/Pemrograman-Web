<?php
include_once("config.php");

$query = "SELECT * FROM customer ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);
?>

<html>
    <head>
        <title>Homepage</title>
        <script src="https://kit.fontawesome.com/a67dff12ec.js" crossorigin="anonymous"></script>
        <style>
            .fa-solid {
                text-decoration: none;
                color: grey;
            }
            
            </style>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>

    <body>
    <a href="add.php" class="btn btn-secondary mt-2">Tambah</i></a><br><br>
    <table width="80%" border="1" class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Join Date</th>
                <th>Last Update</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($result->num_rows > 0): ?>
            <?php while($customer_data = mysqli_fetch_array($result)) : ?>
            <tr>
                <td>
                    <?php echo $customer_data['name']?>
                </td>
                <td>
                    <?php echo $customer_data['phone']?>
                </td>
                <td>
                    <?php echo $customer_data['email']?>
                </td>
                <td>
                    <?= $customer_data['created']?>
                </td>
                <td>
                    <?= $customer_data['updated']?>
                </td>
                <td>
                <a href='edit.php?id=<?=$customer_data["id"]?>' class="btn btn-white"><i class="fa-solid fa-pen text-dark"></i></a> |
                <a href='delete.php?id=<?=$customer_data["id"]?>' class="btn btn-white"><i class="fa-solid fa-minus text-danger"></i></a> 
                </td>
            </tr>
            <?php endwhile; ?>
            <?php else : ?>

            <tr>
                <td colspan="6" rowspan="1" headers="" align="center">Data Customer tidak ditemukan</td>
            </tr>
            <?php endif; ?>

            <?php mysqli_free_result($result); ?>
        </tbody>
    </table>
    <?php if(isset($_GET["message"])){
    $message = $_GET["message"];
    echo "< type='text/javascript'>alert('$message');";
    echo "window.location='index.php'</ script>";
}?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></>

</body>
</html>