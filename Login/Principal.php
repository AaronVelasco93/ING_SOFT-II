<?php
session_start();

$numero_cuenta=$_SESSION['userNumeroCuenta'];


if( !isset($numero_cuenta) ){
    header("location: login.php");

}else{
    echo "<h2> Hola Tu numero de cuenta es: $numero_cuenta </h2>";
    echo " <a href='logica/salir.php'>SALIR</a>";

}


?>
