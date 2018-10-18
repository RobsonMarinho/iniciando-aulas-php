<?php

function soma(int ...$valores){	# os 3 pontos pegam todos os valores, como se fosse um array!

	return array_sum($valores);
}

echo soma(2, 2);	
echo"<br>";
echo soma(25, 33);
echo"<br>";
echo soma(1.5, 3.2);	#Só lê o inteiro
echo"<br>";

?> 