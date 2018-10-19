<?php

//Ip, user, senha, database 
$conn = new mysqli("localhost", "root", "", "dbphp7");
//tratar se houver erro
if ($conn->connect_error){

	echo "Error: " . $conn->connect_error;

}
//Realizando um insert no database via script, os valores serão trocados pelos valores
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

//Método que executa no database
$stmt->execute();

$login = "root";
$pass = "!@#$";
//Segundo inserção
$stmt->execute();

?>