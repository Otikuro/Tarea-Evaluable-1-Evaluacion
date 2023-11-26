<!DOCTYPE html>

<!--
    22. Crear un array asociativo de dos dimensiones. 
    La clave de la primera dimensión será el código de empleado que tendrá el formato “CExxxx” donde xxxx es un número de 4 cifras.
    La segunda dimensión contiene un array asociativo con claves “nombre”, “edad” y “salario” 
    cuyo contenido será el nombre, la edad y el salario del empleado.

    Hacer una función en PHP que reciba como parámetros el nombre, la edad y el salario de un empleado, 
    y calcule un nuevo salario para esa persona en base a su situación:
        o Si el salario es mayor de 2.000€, no cambiará.
        o Si el salario está entre 1.000 y 2.000€:
            ▪ Si además la edad es mayor de 45 años se sube un 4%.
            ▪ Si la edad es menor o igual que 45 años se sube un 10%
        o Si el salario es menor de 1.000€:
            ▪ Los menores de 30 años cobrarán a partir de entonces exactamente 1.500€.
            ▪ De 30 a 45 años sube un 3%.
            ▪ A los mayores de 45 años sube un 15%.
    
    La función debe actualizar en el array los valores en caso de cambio 
    y mostrar en pantalla los nombres y el nuevo salario de los que han sufrido modificaciones.

    Usar paso por referencia
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 22</title>
    
    <?php
        include '../Funciones/funciones_ejercicio22.php';

        $empleados = array(
            "CE0000" => array( 
                "Nombre" => "Andres",
                "Edad" => 50,
                "Salario" => 8000           
            ),
            "CE0001" => array( 
                "Nombre" => "Bruno",
                "Edad" => 50,
                "Salario" => 1000           
            ),
            "CE0002" => array( 
                "Nombre" => "Carlos",
                "Edad" => 30,
                "Salario" => 1000
            ),
            "CE0003" => array( 
                "Nombre" => "Daniela",
                "Edad" => 20,
                "Salario" => 100
            ),
            "CE0004" => array( 
                "Nombre" => "Eduardo",
                "Edad" => 40,
                "Salario" => 100
            ),
            "CE0005" => array( 
                "Nombre" => "Fernando",
                "Edad" => 50,
                "Salario" => 100
            )
        );
    ?>
</head>

<body>
    <h1>Empleados</h1>

    <?php 
        mostrarArray($empleados); 
    ?>

    <h1>Actualización de los salarios </h1>

    <?php 
        foreach($empleados as $clave => &$valor) {
            ($valor["Salario"] < 2000) ? (actualizarSalario($valor["Nombre"], $valor["Edad"], $valor["Salario"])) : ('');
        }
    ?>

    <h1>Empleados actualizados</h1>

    <?php 
        mostrarArray($empleados); 
    ?>
</body>

</html>