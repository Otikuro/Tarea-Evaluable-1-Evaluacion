<!DOCTYPE html>

<!--
    21. Crea una pequeña agenda electrónica utilizando arrays asociativos multidimensionales.
    Los datos a guardar para cada contacto son: nombre, apellidos, teléfono, correo electrónico.
    Debe mostrarse en pantalla los datos guardados en la agenda.
    Crea una función de usuario que reciba el correo electrónico de cada contacto de la
    agenda que devuelva true si el correo termina en “@gmail.com”, “@educa.madrid.org”,
    “@yahoo.com” o “@hotmail.com” y false en caso contrario.
    Mostrar en pantalla una lista con los nombres y correo electrónico de los correos no válidos.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>

    <link rel="stylesheet" href="../../Estilos/tablas.css">

    <?php
        include '../Funciones/funciones_ejercicio21.php';

        $agenda = array(
            0 => array(
                "Nombre"=>"Jorge",
                "Direccion"=>"Madrid",
                "Telefono"=>999999999,
                "Correo"=>"jorge@gmail.com"
            ),
            1 => array(
                "Nombre"=>"Julia",
                "Direccion"=>"Valencia",
                "Telefono"=>123456789,
                "Correo"=>"julia@correo.com"
            ),
            2 => array(
                "Nombre"=>"Lucas",
                "Direccion"=>"Orense",
                "Telefono"=>222222222,
                "Correo"=>"lucas@correo.com"
            ),
            3 => array(
                "Nombre"=>"Susana",
                "Direccion"=>"Ávila",
                "Telefono"=>987654321,
                "Correo"=>"susana@hotmail.com"
            )
        );
    ?>
</head>

<body>
    <h1>Agenda</h1>

    <?php
        mostrarAgenda ($agenda);
    ?>

    <br>

    <table>
        <tr>
            <th> Nombre </th>
            <th> Correo </th>
        </tr>
        <?php
            foreach ($agenda as $clave => $valor) {
                if ( !comprobarCorreo($valor["Correo"]) ) {
                    echo 
                        "<tr>" .
                            "<td>" . $valor["Nombre"] . "</td>" . 
                            "<td>" . $valor["Correo"] . "</td>" . 
                        "</tr>";
                }
            }
        ?>
    </table>  
</body>

</html>