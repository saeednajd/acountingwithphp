<?php
include_once "./control/connection.php";

function invoicesnum(){
    $con = connectToDatabase();
    $query="SELECT * FROM `invoices`";
    $result=$con->query($query);
    return $result;

}
function showinvoices(){
    $con = connectToDatabase();
    $query="SELECT * FROM `invoices`";
    $result=$con->query($query);
    return $result;

}




?>