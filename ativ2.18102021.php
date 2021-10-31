<?php

/*
2- Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que a variável B. A mensagem a ser impressa é: O valor de A="valor" é maior que o valor de B="valor" ou O valor de A="valor" é menor que o valor de B="valor".
*/

ini_set('default_charset','UTF-8');

$A = 3;
$B = 9;
if ($A > $B) {
	echo "O valor de A= ".$A." é maior que o valor de B= ".$B.".";
} elseif ($A < $B) {
	echo "O valor de A= ".$A." é menor que o valor de B= ".$B.".";
} else {
	echo "Valores inválidos.";
}

?>