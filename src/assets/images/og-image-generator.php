<?php
$name = 'CallOne';
$width = 1200;
$height = 630;

if (isset($_GET['resolution']) && isset($_GET['name'])) {
    $resolution = explode('x', $_GET['resolution']);
    $name = ucwords(str_replace('_', ' ', $_GET['name']));
    $width = $resolution[0];
    $height = $resolution[1];
}

header("Content-type:image/jpeg");

$font = '../fonts/apercu-regular-pro-web/apercu-regular-pro.tff';
$image = imagecreate($width, $height);
$bg_image = imagecreatefromjpeg('./og/background.jpg');
$bg_image_x = imagesx($bg_image);
$bg_image_y = imagesy($bg_image);
$new_x = $width;
$new_y = $bg_image_y / $bg_image_x * $width;

imagecopyresized(
    $image,
    $bg_image,
    0,
    0,
    0,
    0,
    $width,
    $height,
    $new_x,
    $new_y
);

$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
imagettftext($image, 36, 0, 100, 100, $white, $font, $name);
imagefilledrectangle($image, 0, 0, $width, $height, $white);
imagefilledpolygon($image,  array(0, 0, $width, 0, 0, $height), 3, $black);
imagejpeg($image);
imagedestroy($image);
?>