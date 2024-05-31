<?php
include_once "./control/connection.php";

function productsnum(){
    $con = connectToDatabase();
    $query="SELECT * FROM `products`";
    $result=$con->query($query);
    return $result;

}
function showproducts(){
    $con = connectToDatabase();
    $query="SELECT * FROM `products`";
    $result=$con->query($query);
    return $result;

}
function showproductsbyid($id){
    $con = connectToDatabase();
    $query="SELECT * FROM `products` where `id`= $id";
    $result=$con->query($query);
    $product=$result->fetch_assoc();
    echo $product["name"];

}
?>