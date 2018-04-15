<?php
session_start();
if (isset($_POST["size"])) {
    $_SESSION["size"] = $_POST["size"];
    header("Location:mens.php");
}
?>