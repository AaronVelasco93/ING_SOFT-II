<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>


<?php
$db_name="php_test";
$user_db="root";
$pass_db="123456";
$host_db="localhost";

$conexion = mysqli_connect($host_db,$user_db,$pass_db);

if($conexion){
echo "<p align='center'  style='color:red' >MySQL le da permisos a PHP para que pueda ejecutar consultas</p>";

}else{
    echo " <p align='center' style='color:red'>Tienes un error en el conexion devido a esto no puedes hacer consultas</p>";
}

?>



</body>
</html>
