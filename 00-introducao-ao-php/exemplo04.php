<?php
$nome = (int)$_GET["a"];

//var_dump($nome);

//pega/exibe o IP do usuário
$ip = $_SERVER["REMOTE_ADDR"]; 
echo $ip; //exibe o ip do usuário

//$ip = $_SERVER["SCRIPT_NAME"];
//echo $ip;
?>