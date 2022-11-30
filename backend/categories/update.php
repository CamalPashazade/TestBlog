<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $menu = $_POST['menu'];
    $status = $_POST['status'];
    $query = "UPDATE  categories SET title='$title', `is_menu`='$menu', status='$status' WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:http://localhost/blog/backend/index.php?route=categories");
    }
}
