<?php
#Variável sendo instanciada
$dt = new DateTime();
#Add 15 dias à data atual
$periodo = new DateInterval("P15D");

#Exibe o objeto $dt
echo $dt->format("d/m/Y H:i:s");

#Recebe o valor instanciado recebendo os diass adicionados
$dt->add($periodo);

echo "<br>";
#Exibe a data somada
echo $dt->format("d/m/Y H:i:s");
?>