<?php
session_start();
include "config.php";

$user = $_POST["username"];
$email = $_POST["email"];
$pass = md5($_POST["password"]);

$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";
$result = mysqli_query($connection, $sql);

$_SESSION["user"] = $user;

header("Location:index.php");
?>