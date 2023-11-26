<!DOCTYPE html>

<!--
    20. Haz un programa que muestre 2000 cuadrados de colores aleatorios que además se 
    coloquen en posiciones aleatorias por la pantalla.
        • El tamaño de los cuadrados será 50x50 píxeles.
        • Las posiciones aleatorias se calcularán entre 0 y 100 que representa el porcentaje
        (0% -100%) para posiciones absolutas, relativa, o fixed de los atributos left y top
        de los cuadrados.
        • Los colores aleatorios se calculan obteniendo un número aleatorio entre 0 y 255
        para cada valor RGB.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>

<body>
    <?php
        for ($i = 0; $i < 2000; $i++) {
            $top = mt_rand(0, 100);
            $left = mt_rand(0, 100);
            
            $red = mt_rand(0, 255);
            $green = mt_rand(0, 255);
            $blue = mt_rand(0, 255);

            echo "<div style='position: fixed;top:" . $top . "%;left:" . $left . "%;background-color:rgb(" . $red . ", " . $blue . ", " . $green . ");width:50px;height:50px;'></div>";
        }
    ?>
</body>

</html>