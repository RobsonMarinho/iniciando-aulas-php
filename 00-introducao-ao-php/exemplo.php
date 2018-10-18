<?php
/*
$anoNascimento = 1990;
$nomeCompleto = "";
*/

//Na linha de baixo temos uma variável com número no nome
$nome1 = "João";

$sobreNome = "Rangel";

$nomeCompleto = $nome1 ." ". $sobreNome;

echo $nomeCompleto;
exit;
echo $nome1;

echo "<br/>";
//unset limpa a variável
//unset($nome1);

//isset verifica se a variável existe
if (isset($nome1)) {

	echo $nome1;

}


?>