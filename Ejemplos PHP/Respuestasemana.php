<?php

//con el post no se puede visualizar en el url
    $dato1= $_POST["txtdiasemana"]; // usamos un arreglo para almacenar  

    if ($dato1=="lunes" || $dato1=="martes" || $dato1=="miercoles" || $dato1=="jueves" || $dato1=="viernes"){
        
        echo "Dia laboral";
        
    }else if ($dato1=="sabado" || $dato1 =="domingo"){
        echo "Dia de descanso";
        
    }else {
        echo "Parametro invalido";
        
    }

?>