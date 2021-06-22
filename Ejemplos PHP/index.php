<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>


<?php
    $x = 8; //variable con valor numerico
?>
<p>Hola</p>


<?php
    echo "hola mundo y el numero es: " .$x;

    echo "<h1>este es un dato muy importante</h1>";

    if ($x == 10){
        echo "<p>El numero es igual a 10 </p>";
        echo "<p>Tu valor que tienes en la variable X es:".$x."</p>";
    }else {
        echo "<h2>Es diferente haaaa</h2>";

    }


?>
    
</body>
</html>
