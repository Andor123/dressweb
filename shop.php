<?php
session_start();
include "config.php";

if (isset($_SESSION["id"]) && isset($_SESSION["user_id"])) {
    $id = $_SESSION["id"];
    $user_id = $_SESSION["user_id"];
    $shop_num = rand(1, 10000);
    $datetime = date("Y-m-d H:i:s");

    $sql = "INSERT INTO shop (clothes_id, user_id, shopping_number, datetime) VALUES ('$id', '$user_id', '$shop_num', '$datetime')";
    $result = mysqli_query($connection, $sql);

    header("Location:shop_end.php");
}
?>