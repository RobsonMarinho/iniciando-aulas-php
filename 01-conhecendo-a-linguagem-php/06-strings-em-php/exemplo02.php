<?php
//stroupper deixando a string maiúscula
//stroupper é uma função!

$nome = "joao rangel";

//Aumenta a fonte da variável
$nome = strtoupper($nome);

echo $nome;

//Diminui a fonte da variável
$nome = strtolower($nome);

echo  "<br>";

//Exibe o valor da variável 
echo $nome;

echo  "<br>";

//Aumenta a primeira letra de cada palavra
echo ucwords($nome);	

echo  "<br>";

//Aumenta apenas a primeira letra da palavra
echo ucfirst($nome); 
?>