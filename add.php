<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>tambah</title>

</head>

<body>
    <h1>
        <center>Add New Product</center>
    </h1>
    <div class="container2">
        <form action="add.php" method="post">
            <div>
                <label>Product Name</label>
                <input class="form-control" type="text" name="product_name" placeholder="Product Name">
            </div>
            <div>
                <label>Price</label>
                <input class="form-control" type="text" name="product_price" placeholder="Price">
            </div>
            <br>
            <button class="btn btn-outline-success" type="submit" name="Submit" value="tambah">Submit</button>
            <a href="index.php" class="btn btn-outline-danger">kembali</a>
            <?php
            if (isset($_POST['Submit'])) {
                $name = $_POST['product_name'];
                $price = $_POST['product_price'];

                // Memanggil koneksi menuju database
                include_once("koneksi.php");

                // Query untuk insert data ke database
                $result = mysqli_query(
                    $mysqli,
                    "INSERT INTO product (product_name,product_price) VALUES ('$name','$price')"
                );

                echo "<br><br>Berhasil menambah product klik <b>kembali</b> untuk melihat.";
            }
            ?>
        </form>

    </div>

</body>

</html>