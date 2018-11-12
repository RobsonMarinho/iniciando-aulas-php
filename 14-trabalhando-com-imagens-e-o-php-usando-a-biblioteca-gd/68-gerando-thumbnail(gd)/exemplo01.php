<?php

header("Content-type: image/jpge");

$file = "wallpaper.jpg";

//largura
$new_width = 256;
//altura
$new_height = 256;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

//(imagem destino, imagem origem, imagem dest , dst_y, src_x, src_y, largura image dest, Altura image dest, largura image origin, altura image origin)	
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

//Gera imagem jpeg
imagejpeg($new_image);

//destrói a imagem da memória
imagedestroy($old_image);
//Limpa da memória
imagedestroy($new_image);

?>