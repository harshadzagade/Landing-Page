<?php
session_start();

header("Content-Type: image/png");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

$chars = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789"; // avoid confusing chars
$len = 5;

$code = "";
for ($i = 0; $i < $len; $i++) {
  $code .= $chars[random_int(0, strlen($chars) - 1)];
}

$_SESSION['captcha_code'] = $code;
$_SESSION['captcha_time'] = time();

// Image
$w = 140; $h = 44;
$img = imagecreatetruecolor($w, $h);

$bg = imagecolorallocate($img, 255, 255, 255);
$txt = imagecolorallocate($img, 25, 25, 25);

imagefilledrectangle($img, 0, 0, $w, $h, $bg);

// noise
for ($i = 0; $i < 7; $i++) {
  $c = imagecolorallocate($img, random_int(120, 220), random_int(120, 220), random_int(120, 220));
  imageline($img, random_int(0,$w), random_int(0,$h), random_int(0,$w), random_int(0,$h), $c);
}
for ($i = 0; $i < 120; $i++) {
  $c = imagecolorallocate($img, random_int(150, 230), random_int(150, 230), random_int(150, 230));
  imagesetpixel($img, random_int(0,$w-1), random_int(0,$h-1), $c);
}

// Draw text
$fontSize = 5;
$startX = 18;
$y = 14;

imagestring($img, $fontSize, $startX, $y, $code, $txt);

imagepng($img);
imagedestroy($img);
exit;