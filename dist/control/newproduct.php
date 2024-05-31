<?php
if(isset($_POST["submit"])){

    include_once "connection.php";
    $con = connectToDatabase();
    $name = $_POST["name"];
    $priceofproduct = intval($_POST["priceofproduct"]);
    $priceofpacking = intval($_POST["priceofpacking"]);
    $priceoftransportation =intval( $_POST["priceoftransportation"]);
    $extraprices = intval($_POST["extraprices"]);
    $inventory = $_POST["inventory"];
    $dateofbuying = $_POST["dateofbuying"];
    $category = $_POST["category"];
    $query="INSERT INTO products(`name`, `priceofproduct`, `priceofpacking`, `priceoftransportation`, `extraprices`, `inventory`, `dateofbuying`, `category`) 
    VALUES ('$name', $priceofproduct, $priceofpacking, $priceoftransportation, $extraprices, '$inventory', '$dateofbuying', '$category')";
    $result=$con->query($query);
    if ($con->affected_rows>0) {
        header("location:../newproduct.php?success=1");
        exit();
    }else{
        header("location:../newproduct.php?error=1");
        exit();
    }

}else{
    header("location:../newproduct.php");
}



?>