<?php
if(isset($_POST["submit"])){

    include_once "connection.php";
    $con = connectToDatabase();

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];


    $query="INSERT INTO `customers`(`name`, `phone`, `address`) VALUES ('$name','$phone','$address') ";
    $result=$con->query($query);
    if ($con->affected_rows>0) {
        header("location:../newcustomer.php?success=1");
        exit();
    }else{
        header("location:../newcustomer.php?error=1");
        exit();
    }

}else{
    header("location:../newcustomer.php");
}



?>