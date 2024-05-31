<?php
include_once "./control/connection.php";

function Customersnum(){
    $con = connectToDatabase();
    $query="SELECT * FROM `customers`";
    $result=$con->query($query);
    return $result;

}
function showcustomers(){
    $con = connectToDatabase();
    $query="SELECT * FROM `customers`";
    $result=$con->query($query);
    return $result;

}




?>