<?php

//include tenta funcionar o arquivo, mesmo que o arquivo não exista ou tenha problema. 
//include "exemplo01.php";

//O require obriga que o arquivo existe e que funcione corretamente. Se não funcionar, gera um erro fatal!
require "exemplo01.php";

$resultado = somar(10, 25);

echo $resultado;

?>