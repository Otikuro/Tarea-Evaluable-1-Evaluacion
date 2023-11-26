<!DOCTYPE html>

<!-- 
4. Realiza un programa en php que calcule el sueldo neto de un trabajador al cual se le aplica una retención del 22%. Supón que el sueldo bruto son 2750€. 
Mostrar por pantalla el sueldo inicial, el impuesto aplicado y el sueldo neto. 
Dar formato html a los resultados obtenidos.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>Calculadora de sueldo neto</h1>

    <?php
        $sueldoInicial = 2750;
        $porcentajeRetencion = 22;

        function calcularSueldo($sueldoInicial, $porcentajeRetencion) {
            return ($sueldoInicial - $sueldoInicial*($porcentajeRetencion/100));
        }

        echo "
        <table>
            <tr>
                <th>Sueldo bruto</th>
                <td> " . $sueldoInicial . "€ </td>
            </tr>
        
            <tr>
                <th>Porcentaje de retención</th>
                <td> " . $porcentajeRetencion . "% </td>
            </tr>

            <tr>
                <th>Sueldo neto</th>
                <td>" . calcularSueldo($sueldoInicial, $porcentajeRetencion) . "€ </td>
            </tr>
        </table>
        ";
    ?>
</body>

</html>