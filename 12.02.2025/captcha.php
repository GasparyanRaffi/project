<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $captcha_response = $_POST["smart-captcha-response"] ?? "";

    $api_key = "ВАШ_API_КЛЮЧ";
    $verify_url = "https://captcha-api.yandex.ru/validate?key=$api_key&response=$captcha_response";

    $response = file_get_contents($verify_url);
    $result = json_decode($response, true);

    if ($result["status"] === "ok") {
        echo "Форма успешно отправлена!";
        echo "<br>Имя: " . htmlspecialchars($name);
        echo "<br>Email: " . htmlspecialchars($email);
    } else {
        echo "Ошибка: Капча не пройдена. Попробуйте снова.";
    }
} else {
    echo "Ошибка: Некорректный запрос.";
}

?>

