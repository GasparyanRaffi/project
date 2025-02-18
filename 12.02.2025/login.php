<?php
session_start();
require "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = trim($_POST["login"]); 
    $password = $_POST["password"];

  
    $stmt = $pdo->prepare("SELECT id, name, password FROM users WHERE email = ? OR phone = ?");
    $stmt->execute([$login, $login]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = $user["name"];
        header("Location: profile.php");
        exit();
    } else {
        echo "Ошибка: Неверный логин или пароль!";
    }
}
?>
<form method="post">
    Email / Телефон: <input type="text" name="login" required><br>
    Пароль: <input type="password" name="password" required><br>
    
    <div id="captcha-container"></div>
<input type="hidden" name="smart-token" id="smart-token">
    <button type="submit">Войти</button>
</form>

<script src="https://smartcaptcha.yandexcloud.net/captcha.js"></script>
<script>
    new YaSmartCaptcha({
        sitekey: 'ВАШ_КЛЮЧ', 
        containerId: 'captcha-container',
        callback: function(token) {
            document.getElementById('smart-token').value = token;
        }
    });
</script>

