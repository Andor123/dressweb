<?php
session_start();
include "config.php";

$user = $_POST["username"];
$pass = md5($_POST["password"]);

$sql = "SELECT username, password FROM admin WHERE username = '$user'";
$result = mysqli_query($connection, $sql);

$_SESSION["user"] = $user;

header("Location:admin.php");
?>