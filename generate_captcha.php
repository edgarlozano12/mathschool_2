<?php 
header("Content-type: image/png"); 
$im = @imagecreatetruecolor(110, 32);#ancho y altura
$color_fondo = imagecolorallocate($im, 102,102,153);#negro
$color_texto = imagecolorallocate($im, 255,255,255);#blanco
session_start(); 
$key = '';
for($x = 15; $x <= 95; $x += 20) {
    $key .= ($num = rand(0, 9));
	imagechar($im, rand(3, 5), $x, rand(2, 14), $num, $color_texto);
}  
imagepng($im);
imagedestroy($im);
$_SESSION['img_number'] = $key;
?> 