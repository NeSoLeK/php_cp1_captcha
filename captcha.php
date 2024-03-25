<?php
session_start();

$randomString = generateRandomString(5);
$_SESSION['captcha_string'] = $randomString;

$im = imagecreatefromjpeg('noise.jpg');

$textColor = imagecolorallocate($im, 0, 0, 0);

$font = './arial.ttf';

$x = 10;
$y = 40;

$fontSize = rand(18, 30);

$spacing = 40;

for ($i = 0; $i < strlen($randomString); $i++) {
    imagettftext($im, $fontSize, 0, $x, $y, $textColor, $font, $randomString[$i]);
    $x += $spacing;
}

header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);

function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
