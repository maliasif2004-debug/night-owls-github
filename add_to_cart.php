<?php
include "db.php";

if (isset($_POST['product_name'])) {

    $product = $_POST['product_name'];

    $sql = "INSERT INTO cart (product_name) VALUES ('$product')";
    $conn->query($sql);

    header("Location: cart.php");
}
?>