
  <?php
  //Eliminar usuario
  include "conexion.php";
  session_start();  
  mysqli_set_charset($conexion, 'utf8');

    //$registroEliminado=$_POST['no_cuenta'];
    $registroEliminado=$_POST['UserName'];



    $consulta="DELETE FROM Usuarios WHERE nombre_usuario =";

    mysqli_query($conexion, $consulta . $registroEliminado);
    
    mysqli_close($conexion);
    echo " <h2>Registro eliminado</h2>";



?>
