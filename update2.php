<?php
session_start();
include "config.php";

$id = $_POST["id"];
$category = $_POST["category"];
$image = $_POST["image"];
$name = $_POST["name"];
$price = $_POST["price"];

$sql = "UPDATE clothes SET category_id = '$category', image = '$image', name = '$name', price = '$price' WHERE id = '$id'";
$result = mysqli_query($connection, $sql);

header("Location:admin.php");
?>