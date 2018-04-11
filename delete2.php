<?php
session_start();
include "config.php";

$id = $_POST["id"];

$sql = "DELETE FROM clothes WHERE id = '$id'";
$result = mysqli_query($connection, $sql);

header("Location:admin.php");
?>