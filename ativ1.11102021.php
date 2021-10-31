<?php

/*  Uma empresa de financiamentos solicitou um programa que faz simuluções de empréstimos, porém haverá taxas diferentes conforme o número de parcelas, segue elas:
Caso o cliente opte por 1 parcela, o programa acrescentará uma taxa de 15% do valor a ser emprestado
Caso o cliente opte por 6 parcelas, o programa acrescentará uma taxa de de 31,99% do valor a ser emprestado
Caso o cliente opte por 12 parcelas, o programa acrescentará uma taxa de de 47,99% do valor a ser emprestado
Caso o cliente opte por outra quantia de parcela, o programa informará que não será possivel
Ao final do programa deve ser apresentado o valor solicitado, a quantia e o valor de cada parcela e o total a ser pago.
*/

ini_set('default_charset','UTF-8');

$vlr = 55000.00;
$parc = 12;
$result = $vlr / $parc;

if($parc == 1) {
	$total = $vlr + ($vlr*0.15);
	echo "<p> Valor solicitado: R$".number_format($vlr, 2, ',','.')."</p>";
	echo "<p> Parcelas: ".$parc." x de ".number_format($result, 2, ',', '.')."</p>";
	echo "<p> Total a ser pago: R$".number_format($total, 2, ',', '.')."</p>";
} elseif ($parc == 6) {
	$total = $vlr + ($vlr*0.3199);
	echo "<p> Valor solicitado: R$".number_format($vlr, 2, ',','.')."</p>";
	echo "<p> Parcelas: ".$parc." x de ".number_format($result, 2, ',', '.')."</p>";
	echo "<p> Total a ser pago: R$".number_format($total, 2, ',', '.')."</p>";
} elseif ($parc == 12) {
	$total = $vlr + ($vlr*0.4799);
	echo "<p> Valor solicitado: R$".number_format($vlr, 2, ',','.')."</p>";
	echo "<p> Parcelas: ".$parc." x de ".number_format($result, 2, ',', '.')."</p>";
	echo "<p> Total a ser pago: R$".number_format($total, 2, ',', '.')."</p>";
} else {
	echo "Não será possível realizar o financiamento";
}

?>