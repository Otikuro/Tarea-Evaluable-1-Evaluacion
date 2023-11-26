<!DOCTYPE html>

<!--
8. Declarar la variable posición, esta variable puede tomar los valores arriba o abajo. Imprimir el valor que toma variable. 
Si no toma ninguno de estos dos valores imprimir por pantalla: 
“La variable contiene otro valor distinto de arriba y abajo”. 
Realizar el ejercicio utilizando la sentencia SWITCH
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <?php
        $posicion = "znb";

        switch ($posicion) {
            case 'arriba': 
                echo $posicion;
                break;
            case 'abajo': 
                echo $posicion;
                break;
            default: 
                echo "La variable contiene otro valor distinto de arriba y abajo" ;
        }
    ?>    
</body>

</html>