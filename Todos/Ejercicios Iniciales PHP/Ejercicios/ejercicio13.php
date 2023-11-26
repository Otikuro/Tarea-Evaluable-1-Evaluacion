<!DOCTYPE html>

<!--
    13. Realiza un programa en php en el que se declare un array de 5 posiciones. 
    Cada posición tomará como valor un color distinto (azul, rojo, verde, rosa, naranja). 
    A continuación, deberá de comprobar si el valor rosa se encuentra almacenado en el array.
    Si es así, deberá de borrar el elemento del array   
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>

<body>
    <?php
        $colores = ["azul", "rojo", "verde", "rosa", "naranja"];

        print_r($colores);
        echo "<br>";

        if ( array_search("rosa", $colores)) {
            $colores[array_search("rosa", $colores)] = null;
        }
        
        print_r($colores);
    ?>
    
</body>

</html>