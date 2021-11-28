<?php 
	
	$nota = 8;
	
    if ($nota>=0 && $nota<=6) {  	
			$mensaje = " El estudiante réprobo con una nota de ".$nota;
    } 
    else if ($nota>=7 && $nota<=10) {
    	  $mensaje = " El estudiante aprobó con una nota de ".$nota;
    }
    
	echo $mensaje;
?>