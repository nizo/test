<?php
$name = 'CallOne';
$width = 1200;
$height = 630;

if (isset($_GET['resolution']) && $_GET['resolution'] != 'x') {
    $resolution = explode('x', $_GET['resolution']);
    $width = $resolution[0];
    $height = $resolution[1];
}
if (isset($_GET['name'])) {
    $name = str_replace('__', "\n", $_GET['name']);
    $name = str_replace('_', ' ', $name);
    $name = ucwords(wordwrap($name, 20, "\n"));
}

// Essentials
$font_light = '../fonts/apercu-light-pro-web/apercu-light-pro.ttf';
$font_regular = '../fonts/apercu-regular-pro-web/apercu-regular-pro.ttf';
$font_medium = '../fonts/apercu-medium-pro-web/apercu-medium-pro.ttf';
$font_bold = '../fonts/Px-Grotesk-Bold/Px-Grotesk-Bold.ttf';
$image = imagecreatefrompng('./og/bg-prepared.png');
$font_size = 64;
$angle = 0;

// Crop image to wanted size
$c_width = imagesx($image);
$c_height = imagesY($image);
$cropped = false;

if ($c_width != $width || $c_height != $height) {
    $c_ratio = $c_width / $c_height;
    $n_ratio = $width / $height;

    if ($c_ratio < $n_ratio) {
        $ratio = $c_width / $width;
        $n_width = $c_width;
        $n_height = $height * $ratio;
    } else {
        $ratio = $c_height / $height;
        $n_height = $c_height;
        $n_width = $width * $ratio;
    }

    $image = imagecrop($image, [
        'x' => 0,
        'y' => 0, // Keep image aligned top
        'width' => $n_width,
        'height' => $n_height
    ]);

    $cropped = true;
}

// Colors
$white = imagecolorallocate($image, 255, 255, 255);

// Add text
imagettftext($image, $font_size, $angle, 10, 140, $white, $font_bold, $name);

// Scale down to wanted size
if ($cropped) {
    $image = imagescale($image, $width);
}

// Serve image
header("Content-type:image/png");
imagepng($image);

// Destroy image
imagedestroy($image);
?>