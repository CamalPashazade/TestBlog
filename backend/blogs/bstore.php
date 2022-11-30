<?php
include "./../config/config.php";



if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_FILES['image'])) {
        $newname = "newimage" . rand(00000, 99999) . "blog.jpg";
        move_uploaded_file($_FILES['image']['tmp_name'], './../uploads/' . $newname);
    }

    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $category = $_POST['cat_id'];
    $status = $_POST['status'];
    $main = $_POST['main'];
    $video = $_POST['video'];
    $image = $newname;

    $query = "INSERT INTO blog (title,description,image,video,cat_id,content,is_monset,status) VALUES ('$title','$description','$image','$video','$category','$content','$main','$status')";
    $result = mysqli_query($db, $query);

    if ($result) {
        header("Location:index.php?route=blogs");
    }
}
