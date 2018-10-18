<?php

echo "<select>";

//Pega o ano atual e subtrai até 100
for ($i=date("Y"); $i > date("Y")-100; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';//Select no html para escolher o ano
}

echo "</select>"
?>