<?php
session_start();
require "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    
    if ($password !== $confirm_password) {
        die("Ошибка: пароли не совпадают!");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? OR phone = ?");
    $stmt->execute([$email, $phone]);

    if ($stmt->fetch()) {
        die("Ошибка: такой email или телефон уже зарегистрирован!");
    }

    $stmt = $pdo->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $hashed_password]);

    $_SESSION["user"] = $name;
    header("Location: profile.php");
    exit();
}
?>
<form method="post">
    Имя: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Телефон: <input type="text" name="phone" required><br>
    Пароль: <input type="password" name="password" required><br>
    Повторите пароль: <input type="password" name="confirm_password" required><br>
    <button type="submit">Зарегистрироваться</button>
</form>
