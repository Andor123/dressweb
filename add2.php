<?php
session_start();
include "config.php";

$category = $_POST["category"];
$image = $_POST["image"];
$name = $_POST["name"];
$size = $_POST["size"];
$price = $_POST["price"];

$sql = "INSERT INTO clothes (category_id, image, name, size, price) VALUES ('$category', '$image', '$name', '$size', '$price')";
$result = mysqli_query($connection, $sql);

header("Location:admin.php");
?>