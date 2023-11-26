<!DOCTYPE html>

<!--
7. Sabiendo que la funcion rand nos retorna un valor aleatorio entre un rango de dos enteros: 
Almacena en una variable un valor entero que la computadora genera de forma aleatoria entre 1 y 100. 
Hacer un programa que muestre por pantalla el valor generado.
Mostrar además si es menor o igual a 50 o si es mayor.
-->

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php
        $number = rand(1, 100);

        echo $number . "<br>";
        echo ($number == 50) ? ("Igual a 50") : (($number < 50 ? "Menor" : "Mayor") . " que 50");
    ?>
</body>

</html>