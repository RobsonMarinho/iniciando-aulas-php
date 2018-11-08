<?php

$image = imagecreatefromjpeg("certificado.jpg");

//criando paleta de cores 	red / green / blue
$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);


imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR. "Bevan-Regular.ttf" , "CERTIFICADO" );	//Exibe o nome como título

imagettftext($image, 32, 0, 375, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Playball-Regular.ttf" , "Robson Marinho" );	//Exibe o nome no certificado

imagestring($image, 3, 440, 370, "Concluído em: ".date("d/m/Y"), $titleColor);	//Define a data atual no certificado

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>