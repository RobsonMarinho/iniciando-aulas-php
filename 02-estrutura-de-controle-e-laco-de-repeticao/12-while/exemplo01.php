<?php

$condicao = true;

while ($condicao) {
	
	$numero = rand(1, 10); #função php "aleatorio"

	if ($numero ===3) {

		echo "TRÊS!!!";
		$condicao = false;

	}
	echo $numero . " ";
}


?>