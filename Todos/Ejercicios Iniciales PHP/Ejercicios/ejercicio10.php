<!DOCTYPE html>

<!-- 
10. Realizar un programa en php que escriba por pantalla la sucesión de Fibonacci. 
Cada número de la serie de Fibonacci se forma sumando los dos números anteriores.
Hacer la función recursiva.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>

    <?php
        function serieFibonacci($numero1, $numero2) {
            echo $numero1 . "<br>";
            (($numero1 + $numero2) < 9999999999999) ? (serieFibonacci($numero2, ($numero1+$numero2))) : (null);
        }
    ?>
</head>

<body>
    <?php
        serieFibonacci(0, 1);
    ?>
</body>

</html>