<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();
// a primeira interrogação que ele encontrar na query será o index do array
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");	

$id = 2;

$stmt->execute(array($id));

/*Cancelar delete
$conn->rollback();*/

//Confirmar delete
$conn->commit();

echo "Delete ok!";




?>