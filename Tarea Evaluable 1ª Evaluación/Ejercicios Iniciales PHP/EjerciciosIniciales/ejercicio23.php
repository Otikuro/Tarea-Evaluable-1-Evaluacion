<!DOCTYPE html>

<!--
    23. Crear un array de 20 elementos que contenga números aleatorios entre 1 y 30 sin repetir. 
    Mostrarlo en pantalla ordenado descendentemente. Los números impares se
    mostrarán en color rojo y los pares en color verde. 
    Mostrar en pantalla cuántos números salieron repetidos al generar el array y cuáles fueron.
    
    Utiliza funciones de usuario.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>

    <link rel="stylesheet" href="../../Estilos/ejercicio23.css">

    <?php
        include '../Funciones/funciones_ejercicio23.php';
    ?>
</head>

<body>
    <?php
        $numeros = [];

        rellenarArray($numeros);
        mostrarArray($numeros);
        mostrarRepetidos($numeros);
    ?>
</body>

</html>