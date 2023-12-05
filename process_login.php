<?php
// Basic login logic (replace with actual authentication)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check username and password (dummy logic)
    if ($username === "user" && $password === "password") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
