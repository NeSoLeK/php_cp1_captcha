<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
</head>
<body>
    <h2>Введите текст с картинки:</h2>
    <form action="check.php" method="post">
        <img src="captcha.php" alt="Captcha Image"><br>
        <input type="text" name="captcha_input"><br>
        <input type="submit" value="Проверить">
    </form>
</body>
</html>
