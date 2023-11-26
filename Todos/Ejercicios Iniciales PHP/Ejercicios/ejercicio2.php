<!DOCTYPE html>

<!-- 
2. Realiza un programa en php que escriba Hola (tu nombre) (tus apellidos). 
Tu nombre debe de estar almacenado en una variable y tus apellidos en otra diferente.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php
        $nombre = "Juan Manuel";
        $apellidos = "Manrique Mendoza";

        echo "Hola " . $nombre . " " . $apellidos;
    ?>
</body>

</html>