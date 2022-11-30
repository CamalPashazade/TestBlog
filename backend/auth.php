<?php
session_start();

include_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = mysqli_real_escape_string($db, $_POST["username"]);
        $password = md5($_POST["password"]);
        $query = mysqli_query($db, "SELECT * FROM admin WHERE username='$username' and password='$password'");
        $admin = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if (!empty($admin) && $admin['status'] == 1) {
            $_SESSION['user'] = $admin;
            $_SESSION['logged_in'] = 1;
            $_SESSION['success_message'] = "Successfuly";
            header("Location:index.php");
        } else {
            $_SESSION['error_message'] = "Username or Password are incorrect";
            header("Location:login.php");
        }
    } else {
        $_SESSION['error_message'] = "Fields must  not be empty";
        header("Location:login.php");
    }
} else {
    echo "Not Allowed";
    die();
}