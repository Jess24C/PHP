<?php

/* tabuada do 5 do...while
*/

ini_set('default_charset','UTF-8');
$i=0;
do {
	$i++;
	$result = 5*$i;
	echo "5 x ".$i." = ".$result."</br>";
} while ($i<10);

?>