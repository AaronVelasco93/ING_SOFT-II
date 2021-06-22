<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
//$conexion = new mysqli('localhost','root','123456','php_test');

//consulta en sql
$consulta_sql = "SELECT * FROM usuarios";

//mandar la consulta 
$resultado = $conexion->query($consulta_sql);


$count = mysqli_num_rows($resultado); 
//creacion de unas columas con ayuda de html

echo "<table border='2' >";
echo "<tr>";
echo    "<th>ID de Trabajador</th>";
echo    "<th>User de Acceso al Sistema</th>";
echo    "<th>Nombre de Usuario</th>";
echo    "<th>Correo electronico</th>";

echo "</tr>";

if($count>0){
    while ($row = mysqli_fetch_assoc($resultado) ){
echo        "<tr>";
  echo  "<td>".$row['id']."</td>";
  echo  "<td>".$row['user']."</td>";


echo "</tr>";




    }
echo "test_php";

}else{

echo "<h1>Sin datos en la DB</h1>";

}


?>

</table>