<?php
session_start();

// --- Configuration ---
$captcha_image_height = 45;
$captcha_image_width = 130;
$total_characters_on_image = 6;
// The characters that can be used in the CAPTCHA code.
$possible_captcha_letters = 'bcdfghjkmnpqrstvwxyz23456789';

// We are now using a built-in GD font (size 5 is the largest default font)
$captcha_font_size = 5; 
$font_width = imagefontwidth($captcha_font_size);
$font_height = imagefontheight($captcha_font_size);

$random_captcha_dots = 50;
$random_captcha_lines = 25;
$captcha_text_color = "0x004d99"; // Professional Blue
$captcha_noise_color = "0xcccccc"; // Light gray noise

// --- CAPTCHA Code Generation ---
$captcha_code = '';
for ($i = 0; $i < $total_characters_on_image; $i++) {
    $captcha_code .= substr(
        $possible_captcha_letters,
        mt_rand(0, strlen($possible_captcha_letters) - 1),
        1
    );
}

// Store the code in the session (lowercase for case-insensitive check)
$_SESSION['captcha'] = strtolower($captcha_code); 

// --- Image Generation ---
$captcha_image = @imagecreate($captcha_image_width, $captcha_image_height);

/* Helper function to convert hex color to RGB array */
function hextorgb ($hexstring){
    $integar = hexdec($hexstring);
    return array(
        "red" => 0xFF & ($integar >> 0x10), 
        "green" => 0xFF & ($integar >> 0x8), 
        "blue" => 0xFF & $integar
    );
}

// setting the background, text and noise colours
$background_color = imagecolorallocate($captcha_image, 255, 255, 255); // White background

$array_text_color = hextorgb($captcha_text_color);
$text_color = imagecolorallocate(
    $captcha_image, 
    $array_text_color['red'], 
    $array_text_color['green'], 
    $array_text_color['blue']
);

$array_noise_color = hextorgb($captcha_noise_color);
$image_noise_color = imagecolorallocate(
    $captcha_image, 
    $array_noise_color['red'], 
    $array_noise_color['green'], 
    $array_noise_color['blue']
);

/* Generate random dots and lines in background (Noise) */
for($count = 0; $count < $random_captcha_dots; $count++) {
    imagefilledellipse(
        $captcha_image, 
        mt_rand(0, $captcha_image_width), 
        mt_rand(0, $captcha_image_height), 
        2, 3, 
        $image_noise_color
    );
}

for($count = 0; $count < $random_captcha_lines; $count++) {
    imageline(
        $captcha_image, 
        mt_rand(0, $captcha_image_width), 
        mt_rand(0, $captcha_image_height), 
        mt_rand(0, $captcha_image_width), 
        mt_rand(0, $captcha_image_height), 
        $image_noise_color
    );
}

/* Calculate position for centering text (Using built-in font size) */
$text_x = ($captcha_image_width - ($total_characters_on_image * $font_width)) / 2;
$text_y = ($captcha_image_height - $font_height) / 2;

// Add the CAPTCHA code using the built-in font
imagestring(
    $captcha_image, 
    $captcha_font_size, // Font size (1-5 for built-in fonts)
    $text_x, 
    $text_y, 
    $captcha_code, 
    $text_color
);

// --- Output Image ---
header('Content-Type: image/jpeg');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 

imagejpeg($captcha_image, null, 90);
imagedestroy($captcha_image);
?>