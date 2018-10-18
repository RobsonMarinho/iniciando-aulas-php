<?php

$meses = array(
	"Janeiro", "Fevereiro", "Março", 
	"Abril", "maio", "junho", 
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {
	
	echo "Indice: ".$index."<br>";
	echo "O mês é: " . $mes . "!". "<br><br>";
}

?>