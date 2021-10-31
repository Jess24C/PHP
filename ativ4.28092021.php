<?php
ini_set('default_charset','UTF-8');

/* faça um programa php que receba o nome de um produto e o valor. o programa deve calcular o valor com 15% de acréscimo e imprimir o nome e o proço final com o acréscimo
*/

$nome = "Fogão";
$valor = 350.00;
$acresc = $valor+($valor*0.15);

echo "Fogão: R$ ".$acresc;

?>