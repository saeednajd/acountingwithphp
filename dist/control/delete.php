<?php
include_once "connection.php";

if(isset($_GET["prid"])){
    $id=$_GET["prid"];
    $con = connectToDatabase();
    $query="DELETE FROM `products` WHERE `id`=$id";
    $result=$con->query($query);
    if(mysqli_affected_rows($con) > 0){
        header("location:../allproducts.php?success=1");        
    } else {
        header("location:../allproducts.php?error=1");        
    }
}else{
    header("location:../allproducts.php");
}


?>