<?php

include "../config/config.php";
// include "./class/database.php";
// $database = new database;


$id = $_GET['id'];




$query = "DELETE FROM admin where id = " . $id;
$result = mysqli_query($db, $query);
// $database->delete('admin','id = $id');

if (mysqli_affected_rows($db) != 0) {
    header("Location:index.php?route=admins");
}
