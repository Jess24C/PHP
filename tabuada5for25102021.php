<?php

/*tabuada do 5
*/

ini_set('default_charset','UTF-8');
for ($i=1; $i<10 ; $i++) { //se começo com $i=0, ele faz esse cálculo e exibe 5x0=0
	$result= 5*$i;
	echo "5 x ".$i." = ".$result."</br>";
}
?>