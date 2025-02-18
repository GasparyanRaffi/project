<?php
session_start();
require_once "db.php";


function clean_input($data) {
    return htmlspecialchars(trim($data));
}


function check_auth() {
    if (!isset($_SESSION["user_id"])) {
        header("Location: index.php");
        exit();
    }
}
?>
