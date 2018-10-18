<?php

$nome = "Glaucio";

function teste() {
	
	global $nome;
	echo $nome;

}

function teste02() {
	$nome = "João";
	global $nome;
	echo $nome. " agora no teste 02!";
}

teste();
teste02();
?>