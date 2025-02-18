
<?php
session_start();
?>
<h2>Добро пожаловать!</h2>

<?php if (isset($_SESSION["user"])): ?>
    <a href="profile.php">Перейти в профиль</a>
    <a href="logout.php">Выйти</a>
<?php else: ?>
    <a href="register.php">Регистрация</a>
    <a href="login.php">Вход</a>
<?php endif; ?>

