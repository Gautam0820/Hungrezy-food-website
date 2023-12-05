<?php


    $SERVER = "localhost";
    $username = "root";
    $password = "";
    $database= "test";
    

    $conn = new mysqli($SERVER, $username, $password ,$database);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO `wt` (`Name`, `Email`, `Password`) VALUES ('$name', '$email', '$pass');";

   

    $querry = $conn->query($sql);
    if($querry===true){
        header("Location: login.html");
        exit;
    
    }
    else
        echo "error"
?>