<?php
include('./includes/header.php');

@$route = $_GET['route'];
switch ($route) {
    case "index":
        include_once('pages/home.php');
        break;
    case "single":
        include_once('pages/single.php');
        break;
    case "category":
        include_once('pages/category.php');
        break;
    default:
        include_once('pages/home.php');
        break;
}
include('./includes/footer.php');
?>