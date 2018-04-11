<?php
session_start();
include "config.php";

$category = $_POST["category"];
$image = $_POST["image"];
$name = $_POST["name"];
$price = $_POST["price"];

$sql = "INSERT INTO clothes (category_id, image, name, price) VALUES ('$category', '$image', '$name', '$price')";
$result = mysqli_query($connection, $sql);

header("Location:admin.php");
?>