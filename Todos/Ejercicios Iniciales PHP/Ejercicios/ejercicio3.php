<!DOCTYPE html>

<!-- 
3. Realiza un programa en php que dados dos números calcule la suma, la resta, la
multiplicación, la división y el módulo, y muestre los resultados obtenidos. 
El programa debe cumplir los siguientes requisitos:
    • La suma se realizará dentro del propio body
    • La resta se realizará mediante una función en el head y se llamará desde el body sin
    parámetros
    • La multiplicación se realizará mediante una función en el head y se llamará desde el
    body con parámetros (los valores de la multiplicación)
    • La división y el módulo se realizarán en ficheros externos y se llamarán mediante
    include.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>

    <link rel="stylesheet" href="../../Estilos/tablas.css">

    <?php
        include '../Funciones/funciones_ejercicio3.php'; 
        
        $num1 = 10;
        $num2 = 2;

        function restar() {
            global $num1, $num2;
            return ($num1 - $num2);
        }

        function multiplicar($num1, $num2) {
            return ($num1*$num2);
        }
    ?>
</head>

<body>  
    <table>
        <tr>
            <th>Operación</th>
            <th>Operando 1</th>
            <th>Signo</th>
            <th>Operando 2</th>
            <th>Resultado</th>
        </tr>

        <tr>
            <td>Suma</td>
            <td><?php echo $num1 ?></td>
            <td>+</td>
            <td><?php echo $num2 ?></td>
            <td>
                <?php 
                    global $num1, $num2; 
                    echo $num1 + $num2; 
                ?>
            </td>
        </tr>

        <tr>
            <td>Resta</td>
            <td><?php echo $num1 ?></td>
            <td>-</td>
            <td><?php echo $num2 ?></td>
            <td><?php echo restar(); ?></td>
        </tr>

        <tr>
            <td>Multiplicación</td>
            <td><?php echo $num1 ?></td>
            <td>*</td>
            <td><?php echo $num2 ?></td>
            <td><?php echo multiplicar(10, 2); ?></td>
        </tr>

        <tr>
            <td>División</td>
            <td><?php echo $num1 ?></td>
            <td>/</td>
            <td><?php echo $num2 ?></td>
            <td><?php echo dividir(); ?></td>
        </tr>

        <tr>
            <td>Módulo</td>
            <td><?php echo $num1 ?></td>
            <td>%</td>
            <td><?php echo $num2 ?></td>
            <td><?php echo modulo(8, 2); ?></td>
        </tr>
    </table>
</body>

</html>