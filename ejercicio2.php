<?php
// Your code here!
    $horasSemanales = 48;
    $cantHorasSemanales = 56;
    $mensaje = "";
    if ($cantHorasSemanales <= $horasSemanales) {
        $mensaje  = " No tienes horas extras, trabajastes las " .$horasSemanales. " horas normal semanal" ;
    } else {
        $mensaje  = "  Tienes una catidad de " .($cantHorasSemanales-$horasSemanales). " horas extras en la semana. ";
    }   echo($mensaje);
 ?>
