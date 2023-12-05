<?php
$login=false;
$showError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "test";

    $conn = mysqli_connect($servername, $username, $pass, $database);

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT `name` FROM `wt` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $row = $result->fetch_assoc();
        $login=true;
        session_start();
        $_SESSION['loggedin'] = true;
        echo $row['name'];
        $_SESSION['name'] = $row['name'];
        header("location:index.php");
        $showAlert='You have Logged In Successfully';
        exit();
    }else{
        echo '<script>alert("Wrong credentials")</script>';
    }
}

?>
