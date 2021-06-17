<?php
    $nDato1 =$_GET["coNum1"];
    $nDato2 =$_GET["coNum2"];
    
    if ($nDato1 > $nDato2){
        
        echo " El numero: ".$nDato1. " Es mayor que: ".$nDato2;
        
    }else if ($nDato2 > $nDato1 ){
        echo " El numero: ".$nDato2. " Es mayor que: ".$nDato1;
        
    }else if ($nDato2 == $nDato2){
        echo " Los dos numerso son iguales: ".$nDato2;
    }else
    {
        echo " Numero Invalido";
        
    }
    

?>