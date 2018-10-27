<?php
//Chama o arquivo config.php
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios as $key => $value) {
	array_push($headers, ucfirst($key));
}

//Cria arquivo e escreve nele
$file = fopen("usuarios.csv", "w+");

//Escreve no arquivo usuarios.csv e pula linha
fwrite($file, implode("," , $headers) . "\r\n");

#Foreach de linha
//Para cada linha coloque a data
foreach ($usuarios as $row) {
	$data = array();

	#Foreatch de coluna
	foreach ($row as $key => $value) {
		
		array_push($data, $value);
	}#END FOREATCH DE COLUNA

	fwrite($file, implode("," , $data) . "\r\n");
}#END FOREATCH DE LINHA

//fecha arquivo
fclose($file);

?>