<?php
session_start();
include "config.php";

$user = $_POST["username"];
$pass = md5($_POST["password"]);

$sql = "SELECT id, username, password FROM users WHERE username = '$user'";
$result = mysqli_query($connection, $sql);

$_SESSION["user"] = $user;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $id = $row["id"];
        $_SESSION["user_id"] = $id;
    }
}

header("Location:index.php");
?>