<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once("koneksi.php");
    // Update
    if (isset($_POST['update'])) {
        $id = $_POST['id_product'];
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];

        // query untuk update data
        $query = mysqli_query(
            $mysqli,
            "UPDATE product SET product_name='$name', product_price='$price' WHERE id_product='$id'"
        );

        header('Location: index.php');
    }
    // Ambil data id
    $id = $_GET['id'];
    $query = mysqli_query($mysqli, "SELECT * FROM product WHERE id_product='$id'");
    while ($product = mysqli_fetch_array($query)) {
        $name = $product['product_name'];
        $price = $product['product_price'];
    }
    ?>
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <h1>
        <center>Edit Product</center>
    </h1>
    <div class="container2">
        <form action="update.php" method="post">
            <div>
                <label>Product Name</label>
                <input class="form-control" type="text" name="product_name" value="<?php echo $name ?>">
            </div>
            <div>
                <label>Price</label>
                <input class="form-control" type="text" name="product_price" value="<?php echo $price ?>">
            </div>
            <br>
            <div>
                <input type="hidden" name="id_product" value="<?php echo $_GET['id'] ?>">
            </div>
            <button class="btn btn-outline-success" type="submit" name="update" value="update">Update</button>
        </form>
    </div>
</body>

</html>