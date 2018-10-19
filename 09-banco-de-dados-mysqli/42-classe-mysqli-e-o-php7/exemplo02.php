<?php

//Ip, user, senha, database 
$conn = new mysqli("localhost", "root", "", "dbphp7");
//tratar se houver erro
if ($conn->connect_error){

	echo "Error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//Enquanto houver resultado, armazenar em $filepro_rowcount()
while ($row = $result->fetch_assoc()) {

	//Exibe a variável $row
	array_push($data, $row);

}

echo json_encode($data);

?>