<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once("koneksi.php");
    $result = mysqli_query($mysqli, 'SELECT * FROM product');
    ?>
    <title>latihan database</title>
</head>

<body>
    <h1 style="color:#3B3B3B ;">
        <center>Product List</center>
    </h1>
    <div class="container">
        <a href="add.php" class="btn btn-outline-danger">Add Product</a>
        <table class="table table-hover">
            <thead align="center">
                <tr style="color:#24F813;">
                    <th>id</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = +1;
                while ($product = mysqli_fetch_array($result)) {
                    ?>
                    <tr align="center">
                        <td style="color:#F81313 ;">
                            <?php echo $count; ?>
                        </td>
                        <td>
                            <?php echo $product['product_name'] ?>
                        </td>
                        <td>
                            <?php echo $product['product_price'] ?>
                        </td>
                        <td>

                            <a href="update.php?id=<?php echo $product['id_product']; ?>" class="btn btn-warning">Update</a>
                            <a href="delete.php?id=<?php echo $product['id_product']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                    $count++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>