<?php
include_once "./control/connection.php";

function users($username){
    $con = connectToDatabase();
    $query="SELECT * FROM `users` WHERE `username`= '$username' ";
    $result=$con->query($query);
    return $result;

}

?>