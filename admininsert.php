<?php
require "conn.php";
if (!empty($_POST)) {
    $name = $_POST['Name'];
    $price = $_POST['price'];
    $prodimg = $_POST['prodimg'];
    $prodimgA = $_POST['prodimgA'];
    $prodimgB = $_POST['prodimgB'];

    $sql = "INSERT INTO product (Name,price,prodimg,prodimgA,prodimgB)
     VALUES ('$name','$price','$prodimg','$prodimgA','$prodimgB')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "data saved ";
    } else {
        die(mysqli_error($con));
    }
} else {
    echo "form not submitted";
}
 