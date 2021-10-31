<?php

/* Faça uma aplicação para receber a quantidade atual em estoque, quantidade maxima em estoque e quantidade minima em estoque de um produto. Calcule e escreva a quantidade média. Se a quantidade em estoque for maior  a quantidade media o algoritmo deve escrever a mensagem "Não efetuar a compra", senão se a quantidade em estoque for igual a quantidade media o algoritmo deve escrever "Agendar Compra", senão escreva a mensagem "Efetuar a compra"
*/

ini_set('default_charset','UTF-8');

$qtd = 50;
$max = 300;
$min = 20;

$med = ($max + $min)/2;

if ($qtd > $med) {
	echo "Não efetuar compra";
} elseif ($qtd < $med) {
	echo "Efetuar compra";
} else {
	echo "Agendar compra";
}

?>