<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
?>
<h2>Привет, <?= htmlspecialchars($_SESSION["user"]) ?>!</h2>
<a href="logout.php">Выйти</a>
