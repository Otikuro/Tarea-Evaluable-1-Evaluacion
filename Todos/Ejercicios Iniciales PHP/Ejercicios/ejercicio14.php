<!DOCTYPE html>

<!--
    14. Almacena en un array los 10 primeros número pares. 
    Imprímelos cada uno en una línea.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>

<body>
    <?php
        $pares;

        for ($i = 0; $i < 10; $i++) {
            $pares[] = $i*2;
        }

        for ($i = 0; $i < 10; $i++) {
            echo $pares[$i] . "<br>";
        }
    ?>
</body>

</html>