<?php
session_start();

if (isset($_SESSION["user"])) {
    unset($_SESSION["user"]);
    if (isset($_SESSION["user_id"])) {
        unset($_SESSION["user_id"]);
    }
    header("Location:index.php");
}
?>