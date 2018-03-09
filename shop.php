<?php
session_start();
include "config.php";

if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $shop_num = rand(1, 10000);
    $datetime = date("Y-m-d H:i:s");

    $sql = "INSERT INTO shop (clothes_id, shopping_number, datetime) VALUES ('$id', '$shop_num', '$datetime')";
    $result = mysqli_query($connection, $sql);

    header("Location:shop_end.php");
}
?>