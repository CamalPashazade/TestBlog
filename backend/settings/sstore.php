<?php
include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $key = $_POST['key'];
    $value = $_POST['value'];
    $status = $_POST['status'];
    $query = "INSERT INTO settings(_key,value,status) VALUES('$key','$value','$status')";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:index.php?route=settings");
    }
}
