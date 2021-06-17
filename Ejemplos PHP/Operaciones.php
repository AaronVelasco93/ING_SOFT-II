<?php

    $opDato1=$_GET["opNum1"];
    $opDato2=$_GET["opNum2"];
    $opDato3=$_GET["reNum3"];

    if ($opDato3 == 1){
        
        $Resultado= $opDato1 + $opDato2;
        echo "Suma";
        echo "Resultado de ".$opDato1. " + ".$opDato2." = ".$Resultado;
                
    }else if ($opDato3 == 2){
        
        $Resultado= $opDato1 - $opDato2;
        echo "Resta";
        echo "Resultado de ".$opDato1. " - ".$opDato2." = ".$Resultado;
                
    } else if ($opDato3 == 3){
        
        $Resultado= $opDato1 * $opDato2;
        echo "Multiplicacion";
        echo "Resultado de ".$opDato1. " x ".$opDato2." = ".$Resultado;
                
    }else if ($opDato3 == 4){
        
        $Resultado= $opDato1 / $opDato2;
        echo "Multiplicacion";
        echo "Resultado de ".$opDato1. " / ".$opDato2." = ".$Resultado;
                
    }else {
        echo "Dato invalido";
        
    }

?>