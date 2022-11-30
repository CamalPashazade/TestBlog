<?php
include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $menu = $_POST['menu'];
    $status = $_POST['status'];
    $query = "INSERT INTO categories(title,is_menu,status) VALUES('$title','$menu','$status')";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:index.php?route=categories");
    }
}
