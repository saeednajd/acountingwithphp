<?php
include_once "../dist/control/connection.php";
if(isset($_POST["submit"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $username=$_POST["username"];
        $password=$_POST["password"];

        $con = connectToDatabase();
        $query="SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' ";
        $result=$con->query($query);
        
        if($result->num_rows > 0){

            setcookie("username", $username, time()+3600*24,"/");
            header("location:../dist/index.php");
        }else{
            // wrong user or pass
            header("location:../index.php?error=2");
        }
    }else{
        // empty user or pass
        header("location:../index.php?error=1");
    }
    



}else{
    header("location:../index.php");
}


?>