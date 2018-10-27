<?php
//condição IF para não criar novamente o diretório
if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
	if (!in_array($item, array(".", ".."))) {

		//Seleciona o diretório e apaga
		unlink("images/" . $item);
	}
}

echo "OK";
?>