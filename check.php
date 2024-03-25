<?php
session_start();

if(isset($_POST['captcha_input']) && isset($_SESSION['captcha_string'])) {
    $userInput = $_POST['captcha_input'];
    $captchaString = $_SESSION['captcha_string'];

    echo "Введенный текст: $userInput<br>";
    echo "CAPTCHA строка: $captchaString<br>";

    if($userInput === $captchaString) {
        echo "Корректно!";
    } else {
        echo "Некорректно!";
    }

    unset($_SESSION['captcha_string']);
} else {
    echo "Ошибка! Попробуйте еще раз.";
}
?>
