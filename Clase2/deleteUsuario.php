<?php
    require "conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    //$registroEliminado=$_POST['no_cuenta'];
    $registroEliminado=$_POST['no_cuenta'];



    $consulta="DELETE FROM PERSONA WHERE no_cuenta =";

    mysqli_query($conexion, $consulta . $registroEliminado);
    
    mysqli_close($conexion);
    echo " <h2>Registro eliminado</h2>";


?>
