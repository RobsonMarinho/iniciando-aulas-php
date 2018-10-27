<?php
//Sempre que o arquivo não existir o "+" cria
//Cria arquivo log.txt
$file = fopen("log.txt", "a+");

//Escreve no arquivo log.txt a data e hora e "\r\n" pula linha
fwrite($file, date("y-m-d H:i:s") . "\r\n");

//Fecha arquivo (Não deleta)
fclose($file);

//Exibe mensagem no localhost
echo "Arquivo criado com sucesso!";





?>