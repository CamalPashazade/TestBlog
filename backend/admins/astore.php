<?php
include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $status = $_POST['status'];

    $query = "INSERT INTO admin(name,surname,username,email,password,status) VALUES('$name','$surname','$username','$email','$password','$status')";

    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:index.php?route=admins");
    }
};
