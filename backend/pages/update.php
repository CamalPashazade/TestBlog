<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $menu = $_POST['menu'];
    $status = $_POST['status'];
    $query = "UPDATE  pages SET title='$title',description='$description',content='$content', `is_menu`='$menu', status='$status' WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:http://localhost/blog/backend/index.php?route=pages");
    }
}
