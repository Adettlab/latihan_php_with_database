<?php

    include_once("koneksi.php");
    $id = $_GET['id'];
    $delete = mysqli_query($mysqli, "DELETE FROM product WHERE id_product='$id'");
    header("Location:index.php");
?>