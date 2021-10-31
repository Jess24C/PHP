<?php
/* 
1- Crie um algoritomo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou zero. A saída deve ser: "Valor Positivo", "Valor Negativo", "Igual a Zero".
*/

ini_set('default_charset','UTF-8');

$valor = 5;
if($valor > 0) {
	echo "Valor Positivo";
} elseif ($valor < 0) {
	echo "Valor Negativo";
} else {
	echo "Igual a Zero";
}

?>