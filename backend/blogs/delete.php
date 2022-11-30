<?php

include "../config/config.php";

$id = $_GET['id'];

$query = "DELETE FROM blog where id = " . $id;
$result = mysqli_query($db, $query);

if (mysqli_affected_rows($db) != 0) {
    header("Location:index.php?route=blogs");
}
