<?php 
	
	$num1 = 8;
	$num2 = 4;
    
    if ($num1>$num2) {
    	
    	if ($num1%$num2==0) {
			$mensaje = " El número ".$num1." es multiplo de ".$num2;
		} else {
			$mensaje = " El número ".$num1." no es multiplo de ".$num2;
		}

    } else {
    	
    	if ($num2%$num1==0) {
			$mensaje = " El número ".$num2." es multiplo de ".$num1;
		} else {
			$mensaje = " El número ".$num2." no es multiplo de ".$num1;
		}
    }
    
	echo $mensaje;
?>