<!DOCTYPE html>

<!--
6. Realizar un programa en php en el que dado un número entero positivo determine si es par o impar. 
Si el número no es un entero positivo deberá de mostrar un mensaje indicándolo (la función is_integer puede ayudarte)
-->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>  
    <?php
        $numero = 8;

        echo $numero . "<br>";
        echo ($numero%1 == 0 && $numero < 1) ? ("El número no es un entero positivo, la función is_integer puede ayudarte") : ($numero%2 == 0 ? "Par" : "Impar") ;
    ?>
</body>

</html>