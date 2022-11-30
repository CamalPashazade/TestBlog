<?php
include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $menu = $_POST['menu'];
    $status = $_POST['status'];

    $query = "INSERT INTO pages(title,is_menu,status,description,content) VALUES('$title','$menu','$status','$description','$content')";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:index.php?route=pages");
    }
}
