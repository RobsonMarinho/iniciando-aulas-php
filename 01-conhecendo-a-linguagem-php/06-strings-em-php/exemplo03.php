<?php

$empresa = "Hcode";

//troca uma coisa por outra, no caso troca o 'o' pelo '0' da variável $empresa
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3 ", $empresa);

echo $empresa;
?>