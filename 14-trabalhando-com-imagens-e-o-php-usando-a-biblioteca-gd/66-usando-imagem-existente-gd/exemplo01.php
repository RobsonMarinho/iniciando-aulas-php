<?php

$image = imagecreatefromjpeg("certificado.jpg");

//criando paleta de cores 	red / green / blue
$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);	//Exibe o nome como título
imagestring($image, 5, 440, 350, "Robson Marinho", $titleColor);	//Exibe o nome no certificado
imagestring($image, 3, 440, 370, "Concluído em: ".date("d/m/Y"), $titleColor);	//Define a data atual no certificado

header("Content-type: image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 100);

imagedestroy($image);

?>