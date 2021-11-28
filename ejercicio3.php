<?php 
	
	$num1=4;
	$num2=6;
	$potencia;

	if ($num1>=$num2) {
		$potencia = pow($num1, $num2);
	} else {
		$potencia = pow($num2, $num1);
	}
	
	echo " la potencia es: ". $potencia;
?>