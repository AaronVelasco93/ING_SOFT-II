<?php
include ("conexion.php");
mysqli_set_charset($conexion,'utf8');
$conexion = new mysqli('localhost','root','123456','php_test');

//consulta en sql
$consulta_sql = "SELECT * FROM usuarios";

//mandar la consulta 
$resultado = $conexion->query($consulta_sql);


$count = mysqli_num_rows($resultado);




?>