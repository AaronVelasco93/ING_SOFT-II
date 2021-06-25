<?php
require 'conexion.php';
session_start();
$usuario = $_SESSION['usermane'];


if (!isset($usuario)) {

    header("location: login.php");
} else {
    $conn = new mysqli('localhost', 'root', '123456', 'asistencia');
    mysqli_set_charset($conn, 'utf8');

    $consulta = $conn->query("select * from usuarios");
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <!--Materialize files-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
        <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">

    </head>

    <body>

        <h1 style="text-align:center">Eliminar Usuario</h1>

        <form align="center" ; method="POST" action="deleteUsuario.php">
            <div class="form-group">
                <label for="direcion">Nombre Usuario a eleminar</label><br>
                <input type="text" name="UserName" placeholder="Nombre de Usuario">
            </div>
            <br>
            <button type="submit">Eliminar Usuario</button>

        </form>






        <br><br>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./dashboard.php">Lista</a>
        <a style="right:inherit" class="waves-effect waves-light btn" href="./session_destroy.php">Salir</a>


        <!--Script de nav pasarlo a un php-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/materialize.js"></script>
        <script type="text/javascript">
            $(".brand-logo").sideNav();
        </script>
    </body>

    </html>


<?php

}


?>