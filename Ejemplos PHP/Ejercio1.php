<body>

<!--con el post no se vizualiza en el url-->
    <form action="Respuestasemana.php" method="POST" >

        <!--dia de la semana -->

        <br>Dia de la semana<br>
        <input name="txtdiasemana" >
        <button>Que dia es</button>

        <br>

    </form>

    <form action="RespuestaSuma.php">
        <!--Suma de Numeros -->

        <br> Suma de Numeros<br>
        <input name="num1">
        <input name="num2">
        <button> Resultado Suma</button>
        <br>

    </form>

    <form action="comparacionnumero.php">
        <!--Comparacion de numero -->
        <br>Comparacion de 2 numero<br>
        <input name="coNum1">
        <input name="coNum2">
        <button> Comparacion de numeros </button>


    </form>

    <form action="Calificaciones.php">
        <!--Calificacion de alumnos -->
        <br>Calificaciones<br>
        <input name="caNum1">
        <button>Calificacion</button>

    </form>

    <form action="Operaciones.php">
        <!--Operaciones de numeros-->
        <br>Operaciones Matematicas<br>
        1=Suma
        <br>
        2=Resta
        <br>
        3=Multiplica
        <br>
        4=Divide
        <br>
        <input placeholder="Ingresa un numero" name="opNum1">
        <input placeholder="Ingresa un numero" name="opNum2">
        <br><br>Opcion
        <input  name="reNum3">
        <button>Resultado</button>

    </form>
<!--Es recomendable definfir el metodo-->
    <form action="juego.php" method="get">

        <!--JUego de piedra papel o tijeras -->
        <br>Juego<br><br>
        Piedra
        <br>
        Papel 
        <br>
        Tijera<br><br>
        Player 1
        <input name="jutxt1"><br>
        Player 2
        <input name="jutxt2"><br><br>
        <button>Jugar</button>


    </form>

</body>

