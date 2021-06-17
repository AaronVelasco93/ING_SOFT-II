<?php
    
    $juDato1=$_GET["jutxt1"];
    $juDato2=$_GET["jutxt2"];
    
    if ($juDato1 == $juDato2){
        echo "Empate los 2 eligieron: ".$juDato1;
        
    } else {
        
         if ($juDato1 == "Piedra" && $juDato2 == "Papel") {
                    echo "".$juDato1 ." vs " . $juDato2 . " , Gano el Player 2.";  
                    
        } 
        if ($juDato1 == "Piedra" && $juDato2 == "Tijera") {
                    echo "".$juDato1." vs " .$juDato2 . " , Gano el Player 1";
            
        } 
        if ($juDato1 == "Papel" && $juDato2 == "Tijera") { 
                    echo "".$juDato1." vs " .$juDato2. " , Gano el Player 2."; 
            
         }
         if ($juDato1 == "Papel" && $juDato2 == "Piedra"){
                    echo "".$juDato1." vs " .$juDato2. " , Gano el Player 2.";
             
        }
         if ($juDato1 == "Tijera" && $juDato2 == "Piedra") {
                    echo "".$juDato1." vs " .$juDato2. " , Gano el Player 2.";    
             
            }
         if ($juDato1 == "Tijera" && $juDato2 == "Papel") {
                    echo "".$juDato1." vs ".$juDato2. " , Gano el Player 1";
             
        }//Termina el if 
        
        
    }
