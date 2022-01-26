<?php
// Read background files from pool directoy
function get_backgrounds()
{
    $pool_directory = './background-pool';
    $pool_tmp = scandir($pool_directory);
    $pool = [];
    foreach ($pool_tmp as $key => $filename)
    {
        if (!is_file($pool_directory.'/'.$filename))
            continue;
        $pathinfo = pathinfo($pool_directory.'/'.$filename);
        $pool[] = $pathinfo['filename'];
    }
    return $pool;
}

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
define('BACKGROUNDS', get_backgrounds());

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

// Check background parameter
if ((empty($_GET['background'])) ||                     // If parameter is empty
    (!in_array($_GET['background'], BACKGROUNDS)))      // If parameter is not in array of available backgrounds
{
    // Use random background of available
    $random_index = array_rand(BACKGROUNDS);
    $background_file = BACKGROUNDS[$random_index];
}
else
{
    // Use passed background
    $background_file = $_GET['background'];
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
$random_background = imagecreatefrompng('./background-pool/'.$background_file.'.png');

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
$text_size = $final_width / 20;                        // Define font size depenging on image width
$text_angle = 0;                                       // Text roation in degrees
$text_x = 16;                                          // Text X position
$text_y = round($logo_offset_y + $logo_height_new);    // Text Y position depending on logo size
$line_offset = 15;                                     // Space between lines
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
?>