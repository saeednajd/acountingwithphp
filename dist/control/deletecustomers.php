<?php
include_once "connection.php";

if(isset($_GET["customerid"])){
    $id=$_GET["customerid"];
    $con = connectToDatabase();
    $query="DELETE FROM `customers` WHERE `id`=$id";
    $result=$con->query($query);
    if(mysqli_affected_rows($con) > 0){
        header("location:../allcustomers.php?success=1");        
    } else {
        header("location:../allcustomers.php?error=1");        
    }
}else{
    header("location:../allcustomers.php");
}


?>