<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);
// (image, red,green, blue) = preto
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

//Escreve algo na tela
imagestring($image, 5, 60, 120, "Curso PHP7", $red);

//formato que vai gerar
imagepng($image);

imagedestroy($image);


?>