<?php
    require 'conexion.php';
    session_start();

    $no_cuenta = $_POST['no_cuenta'];
    $clave = $_POST['clave'];


    // La funcion COUNT, nos va a devolver el numero de filas de la consulta, es decir el numero de registros que cumplen coon una determinada condicion (En eset caso el WHERE)
    $consulta="SELECT COUNT(*) as contar FROM persona WHERE no_cuenta = ' $no_cuenta' AND password ='$clave'";
    
    $mandarConsulta = mysqli_query($conexion, $consulta);

    $array = mysqli_fetch_array($mandarConsulta);

    if($array['contar']>0){

        $_SESSION['userNumeroCuenta']=$no_cuenta;
        header("locatio: ../Principal.php");

    }else {

    echo "<h2>datos incorrectos</h2>";

    }



?>