<?php
session_start();
if (isset($_SESSION["size"])) {
    unset($_SESSION["size"]);
    header("Location:mens.php");
}
?>