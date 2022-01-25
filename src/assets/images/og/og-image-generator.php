<?php
// Default values
define('DEFAULT_TEXT', 'CallOne');
define('DEFAULT_IMG_WIDTH', 1200);
define('DEFAULT_IMG_HEIGHT', 630);
define('MAX_IMG_WIDTH', 4096);          // 4k
define('MAX_IMG_HEIGHT', 2150);         // 4k aspect ratio 40:21
define('MIN_IMG_WIDTH', 150);
define('MIN_IMG_HEIGHT', 79);           // Aspect ratio 40:21
define('MAX_TEXT_LENGTH', 150);
define('MIN_TEXT_LENGTH', 5);
define('MAX_LINE_LENGTH', 20);
define('FONT_FAMILY', '../../fonts/Px-Grotesk-Bold/Px-Grotesk-Bold.ttf');
define('LOGO', './logo.png');

// Check resolution parameter
if ((empty($_GET['resolution'])) ||                      // If parameter is empty
    (!preg_match('/^\d*x\d*$/', $_GET['resolution'])))   // If parameter is not in '123x123' format
{
    // Use default values
    $final_width = DEFAULT_IMG_WIDTH;
    $final_height = DEFAULT_IMG_HEIGHT;
}
else
{
    // Parse and use actual parameter values
    preg_match('/^(\d*)x(\d*)$/', $_GET['resolution'], $resolution);

    $final_width = $resolution[1];
    $final_height = $resolution[2];

    // Check if min/max value criterias are met
    if (($final_width > MAX_IMG_WIDTH) ||
        ($final_height > MAX_IMG_HEIGHT) ||
        ($final_width < MIN_IMG_WIDTH) ||
        ($final_height < MIN_IMG_HEIGHT))
    {
        // Use default values
        $final_width = DEFAULT_IMG_WIDTH;
        $final_height = DEFAULT_IMG_HEIGHT;
    }
}

// Check text parameter
if ((empty($_GET['text'])) ||                       // If parameter is empty
    (strlen($_GET['text']) > MAX_TEXT_LENGTH) ||    // If parameter exceeds max length
    (strlen($_GET['text']) < MIN_TEXT_LENGTH))      // If parameter is shorter than min length
{
    // Use default values
    $final_text[] = DEFAULT_TEXT;
}
else
{
    // Parse and use actual parameter values
    $text_parameter = htmlspecialchars($_GET['text']);
    // $text_parameter = wordwrap($text_parameter, MAX_LINE_LENGTH, "__");
    $lines_tmp = explode('__', $text_parameter);
    $final_text = [];
    foreach ($lines_tmp as $key => $value) {
        $value = ucwords(str_replace('_', ' ', $value));
        $value = wordwrap($value, MAX_LINE_LENGTH, '__');
        $value = explode('__', $value);
        $final_text = array_merge($final_text, $value);
    }
}

// Image creation
$final_image = imagecreatetruecolor($final_width, $final_height);
$random_background = imagecreatefrompng('./'.rand(1, 2).'.png');

// Define colors
$white = imagecolorallocate($final_image, 255, 255, 255);
$black_semi_transparent = imagecolorallocatealpha($final_image, 0, 0, 0, 20);

// Resize background to fit final image size
// Calculate background size based on final width
$background_width_current = imagesx($random_background);
$background_height_current = imagesy($random_background);
$background_ratio = $background_height_current / $background_width_current;
$background_width_new = $final_width;
$background_height_new = $background_width_new * $background_ratio;

// If final height is not met yet, recalculate background size based on final height
if ($background_height_new < $final_height)
{
    $background_ratio = $background_width_current / $background_height_current;
    $background_height_new = $final_height;
    $background_width_new = $background_height_new * $background_ratio;
}

// Calculate background offset to always display center portion of background image
$background_offset_x = abs(($final_width - $background_width_new) / 2);
$background_offset_y = abs(($final_height - $background_height_new) / 2);

// Scale background to fit new dimensions
$random_background = imagescale($random_background, $background_width_new);

// Paste background image
imagecopymerge($final_image, $random_background, 0, 0, $background_offset_x, $background_offset_y, $background_width_new, $background_height_new, 100);

// Draw black rectangle
$rectangle_points = [
    0, 0,               // Top left corner
    $final_width, 0,    // Top right corner
    0, $final_height    // Bottom left corner
];
imagefilledpolygon($final_image, $rectangle_points, 3, $black_semi_transparent);

// Add logo on top of image
$logo = imagecreatefrompng(LOGO);
$logo_width_current = imagesx($logo);
$logo_height_current = imagesy($logo);
$logo_ratio = $logo_height_current / $logo_width_current;
$logo_width_new = $final_width / 4;
$logo_height_new = $logo_width_new * $logo_ratio;
$logo_offset_x = 20;
$logo_offset_y = 20;
imagealphablending($final_image, true);
imagesavealpha($final_image, true);
imagecopyresized($final_image, $logo, $logo_offset_x, $logo_offset_y, 0, 0, $logo_width_new, $logo_height_new, $logo_width_current, $logo_height_current);

// Add text on top of image
$text_size = $final_width / 20;                                                 // Define font size depenging on image width
$text_angle = 0;   
$text_x = 16;                                                              // Text X position
$text_y = round($logo_offset_y + $logo_height_new);              // Text Y position depending on logo size                                                // Text roation in degrees
$line_offset = 15;
foreach ($final_text as $line) {
    $text_box = imagettfbbox($text_size, $text_angle, FONT_FAMILY, $line);    // Get text box values for calculation of position
    $text_offset = abs($text_box[5]);
    $text_y += $text_offset + $line_offset;
    imagettftext($final_image, $text_size, $text_angle, $text_x, $text_y, $white, FONT_FAMILY, $line);
}

// Serve image
header("Content-type:image/png");
imagepng($final_image);

// Destroy image
imagedestroy($final_image);


/* OLD CODE BELOW */
/*
$name = 'CallOne';
$width = 1200;
$height = 630;

if (isset($_GET['resolution']) && $_GET['resolution'] != 'x') {
    $resolution = explode('x', $_GET['resolution']);
    $width = $resolution[0];
    $height = $resolution[1];
}
if (isset($_GET['text'])) {
    $name = str_replace('__', "\n", $_GET['text']);
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
*/
?>