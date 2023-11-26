<!DOCTYPE html>

<!--
5. Realiza un programa en php que dados dos números indique cuál de dos números es el mayor. 
Inicialmente el programa mostrará el valor de los números y a continuación indicará: 
El número _ es mayor que el número _
-->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php
        $numero1 = 41;
        $numero2 = 7;

        echo "Número 1: " . $numero1 . "<br>";
        echo "Número 2: " . $numero2 . "<br>";
        echo ($numero1 == $numero2) ? ("Los números son iguales") : ("El número " . (($numero1 > $numero2) ? ($numero1 . " es mayor que el número " . $numero2) : ($numero2 . " es mayor que el número " . $numero1)));
    ?>
</body>

</html>