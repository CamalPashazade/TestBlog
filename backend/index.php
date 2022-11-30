<?php
include 'includes/header.php';

@$route = $_GET['route'];

switch ($route) {
    case "admins":
        include_once('admins/index.php');
        break;
    case "admins/edit":
        include_once('admins/edit.php');
        break;
    case "admins/delete":
        include_once('admins/delete.php');
        break;
    case "admins/create":
        include_once('admins/create.php');
        break;
    case "astore":
        include_once('admins/astore.php');
        break;
    case "blogs":
        include_once('blogs/index.php');
        break;
    case "bstore":
        include_once('blogs/bstore.php');
        break;
    case "blogs/create":
        include_once('blogs/create.php');
        break;
    case "blogs/delete":
        include_once('blogs/delete.php');
        break;
    case "blogs/edit":
        include_once('blogs/edit.php');
        break;
    case "categories":
        include_once('categories/index.php');
        break;
    case "categories/create":
        include_once('categories/create.php');
        break;
    case "categories/delete":
        include_once('categories/delete.php');
        break;
    case "categories/edit":
        include_once('categories/edit.php');
        break;
    case "cstore":
        include_once('categories/cstore.php');
        break;
    case "settings":
        include_once('settings/index.php');
        break;
    case "settings/create":
        include_once('settings/create.php');
        break;
    case "settings/delete":
        include_once('settings/delete.php');
        break;
    case "settings/edit":
        include_once('settings/edit.php');
        break;
    case "sstore":
        include_once('settings/sstore.php');
        break;
    case "pages":
        include_once('pages/index.php');
        break;
    case "pages/create":
        include_once('pages/create.php');
        break;
    case "pages/delete":
        include_once('pages/delete.php');
        break;
    case "pages/edit":
        include_once('pages/edit.php');
        break;
    case "pstore":
        include_once('pages/pstore.php');
        break;
    default:
        include_once('dashboard.php');
        break;
}

include 'includes/sidebar.php';
include 'includes/footer.php';
