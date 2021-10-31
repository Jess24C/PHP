<?php
/*
A empresa ABC solicitou um programa para calcular o salário dos funcionários, porém deve-se levar em consideração algumas regras de negócio e peculiaridades da empresa. Segue abaixo:

- Deve-se aplicar ao valor bruto do salário os <b>descontos</b> do INSS (11%) e o valor que será recolhido pela empresa de FGTS (9%)

- Caso o valor bruto do salário seja maior que R$1904,00 deve ser aplicado um desconto de IRPF no valor de 7,5%

- Caso o valor bruto do salário seja maior que R$2826,00 deve ser aplicado um desconto de IRPF no valor de 15%

- Caso o valor bruto do salário não ultrapasse as regras do IRPF, o programa não deve descontar nenhum valor a mais do salário.

- No final do programa, deve ser apresentado o valor do salário bruto e líquido, com seus respectivos descontos, caso obtiverem.
*/

$bruto = 3000.00;
$inss = $bruto*0.11;
$fgts = $bruto*0.09;
$result = $bruto - $inss;

if(($result > 1904.00) && ($result <= 2826.00)) {
	$irpf = $bruto*0.075;
	$liq = $bruto - $irpf;
	echo "Bruto: R$".$bruto."<p></p> IRPF: R$".$irpf." <p></p> Líquido: R$".$liq. "<p></p> FGTS: R$".$fgts."<p></p> INSS: R$".$inss;
} elseif ($result > 2826.00) {
	$irpf = $bruto*0.15;
	echo "Bruto: R$".$bruto."<p></p> IRPF: R$".$irpf." <p></p> Líquido: R$".$liq. "<p></p> FGTS: R$".$fgts."<p></p> INSS: R$".$inss;
} else {
	echo "Salário: ".$result;
}

?>