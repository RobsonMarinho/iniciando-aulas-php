<?php

//Cria arquivo e escreve
$file = fopen("teste.txt", "w+");

//fecha arquivo
fclose($file);

//deleta arquivo/pasta
unlink("teste.txt");

echo "Arquivo removido com sucesso";


?>