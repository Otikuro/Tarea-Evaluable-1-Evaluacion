<!DOCTYPE html>

<!--
    2. Escribe una clase Cuenta para representar una cuenta bancaria. Los datos de la cuenta son:
    nombre del cliente (String), número de cuenta (String), tipo de interés (double) y saldo (double).
    La clase contendrá los siguientes métodos:
        • Constructor con todos los parámetros
        • Métodos setters/getters para asignar y obtener los datos de la cuenta.
        • Métodos ingreso y reintegro. Un ingreso consiste en aumentar el saldo en la cantidad
        que se indique. Esa cantidad no puede ser negativa. Un reintegro consiste en disminuir
        el saldo en una cantidad pero antes se debe comprobar que hay saldo suficiente. La
        cantidad no puede ser negativa. Los métodos ingreso y reintegro devuelven true si la
        operación se ha podido realizar o false en caso contrario.

    Crea 2 instancias para validar el funcionamiento del programa.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ampliación - Ejercicio 2</title>

    <?php
        include "Cuenta.php";
    ?>
</head>

<body>
    <?php
        $cuenta1 = new Cuenta ("Juan", "1", 8.5, 1000);
        $cuenta2 = new Cuenta ("Pedro", "2", 4, 200);

        echo $cuenta1;
        echo $cuenta2;

        echo "***********************Ingreso y reintegro no válidos************************<br>";


        $cuenta1->ingreso(-200);
        $cuenta2->reintegro(500);

        echo $cuenta1;
        echo $cuenta2;


        echo "**********************Ingreso y reintegro válidos*************************<br>";


        $cuenta1->ingreso(200);
        $cuenta2->reintegro(100);

        echo $cuenta1;
        echo $cuenta2;


        echo "***********************Transferencia no válida(Ingreso mayor que la cantidad en cuenta(8000))************************<br>";

        if ( !$cuenta1->transferencia($cuenta2, 80000) ) {
            echo "Error";
        }

        echo $cuenta1;
        echo $cuenta2;


        echo "***********************Transferencia no válida(Ingreso negativo(-100))************************<br>";

        if ( !$cuenta1->transferencia($cuenta2, -100) ) {
            echo "Error";
        }

        echo $cuenta1;
        echo $cuenta2;


        echo "***********************Transferencia válida************************<br>";

        if ( !$cuenta1->transferencia($cuenta2, 200) ) {
            echo "Error";
        }

        echo $cuenta1;
        echo $cuenta2;
    ?>
</body>

</html>

