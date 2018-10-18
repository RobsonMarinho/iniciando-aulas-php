<?php

require_once("config.php");

unset($_SESSION['nome']);

echo $_SESSION["nome"] = "Hcode";

session_destroy();//destróia variável de sessão removndo o usuário
?>