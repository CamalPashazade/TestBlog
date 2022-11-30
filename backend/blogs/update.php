<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_FILES['image'])) {
        $newname = "newimage" . rand(00000, 99999) . "blog.jpg";
        move_uploaded_file($_FILES['image']['tmp_name'], '../../uploads/' . $newname);
    }

    $id = $_GET['id'];

    $query = mysqli_query($db, "SELECT * FROM blog where id=$id");
    $blogs = mysqli_fetch_array($query, MYSQLI_ASSOC);
    $old_link = $blogs['image'];


    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $newname;
    $video = $_POST['video'];
    $cat_id = $_POST['cat_id'];
    $content = $_POST['content'];
    $is_monset = $_POST['is_monset'];
    $status = $_POST['status'];

    if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {

        echo "True:<br>";
        print_r($_FILES['image']);
        $query = "UPDATE blog SET 
        title='$title',description='$description', image='$image', video='$video', cat_id='$cat_id', content='$content', is_monset='$is_monset', status='$status'
        WHERE id='$id'";
        unlink('../../uploads/' . $old_link);
    } else {
        echo "False:<br>";
        print_r($_FILES['image']);
        $query = "UPDATE blog SET 
        title='$title',description='$description', video='$video', cat_id='$cat_id', content='$content', is_monset='$is_monset', status='$status'
        WHERE id='$id'";
    }
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:../index.php?route=blogs");
    }
}
