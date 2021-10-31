<?php

/*
3- Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores e, caso ambos sejam iguais, informe que os números digitados são iguais. Exemplo: A=10 e B=8. Você deve imprimir na tela 8, 10 ou A=5 e B=5. Você deve imprimir na tela "Números Iguais".
*/

ini_set('default_charset','UTF-8');

$A = 6;
$B = 7;

if ($A > $B) {
	echo $B.", ".$A;
} elseif ($B > $A) {
	echo $A.", ".$B;
} else {
	echo "Números Iguais";
}

?>