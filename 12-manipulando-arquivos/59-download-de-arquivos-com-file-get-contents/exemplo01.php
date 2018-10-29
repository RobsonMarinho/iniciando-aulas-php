<?php

$link = "http://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

//Gera o nome do arquivo
$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?$basename?>">