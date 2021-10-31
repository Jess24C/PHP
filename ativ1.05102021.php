<?php

/*
Faça um programa em php para receber o nome e a idade de uma pessoa. O programa deve informar se essa pessoa é menor de idade, maior de idade ou idoso.
*/

$nome = "Jessica";
$idade = "29";

if ($idade < 18) {
	echo $nome." é menor de idade: ".$idade." anos.";
} elseif ($idade < 60) {
	echo $nome." é maior de idade: ".$idade." anos.";
} else {
	echo $nome." é idoso: ".$idade." anos.";
}

?>