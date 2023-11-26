<!DOCTYPE html>

<!-- 
    1. Modificar la agenda electrónica de ejemplos anteriores en la que se introducían datos
    de un contacto y se guardaban en un array haciendo que ahora los datos se guarden en
    un fichero de texto en el que cada línea corresponda con un contacto.
        - Si el fichero no existe, ha de crearse y mostrar el texto “No hay contactos”.
        - Si ya existe, deben leerse los contactos que tenga guardados y mostrarlos en la
        página.
        - Los nuevos contactos que se introduzcan por formulario se irán añadiendo al
        fichero.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Acceso a Datos - Ejercicio 1</title>

    <link rel="stylesheet" href="../Estilos/tablas.css">

    <?php
        function mostrarAgenda (string $fileName): void {
            $handle = fopen($fileName, "rb");

            echo "<table>";
                echo "<tr>";
                    echo "<th>Nombre</th>";
                    echo "<th>Dirección</th>";
                    echo "<th>Télefono</th>";
                    echo "<th>Correo electrónico</th>";
                echo "</tr>";
            while ( ($row = fgetcsv($handle, 0, ",")) !== FALSE ) {
                echo "<tr>";
                for ($i = 0; $i < count($row); $i++) {
                    echo "<td>" . $row[$i] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
    
            fclose($handle);
        }
    ?>
</head>

<body> 
    <h1>Agenda</h1>

    <hr>

    <form method="post" action="">
        Nombre: <input type="text" name="nombre" />
        Dirección: <input type="text" name="direccion" />
        Télefono: <input type="text" name="telefono" />
        Correo electrónico: <input type="text" name="correo" />
        <input type="submit" name="sendForm" value="Guardar" />
    </form>

    <hr>

    <?php
        $fileName = "agenda.csv";

        if ( file_exists($fileName) && !isset($_POST["sendForm"])) {
            mostrarAgenda($fileName);
        } else if ( isset($_POST["sendForm"]) ) {
            if ( !empty($_POST["nombre"]) ) {
                $handle = fopen($fileName, "a");
                    
                fputcsv($handle, array($_POST["nombre"], $_POST["direccion"], $_POST["telefono"], $_POST["correo"]), ",");
            
                fclose($handle);
            }

            mostrarAgenda($fileName);
        } else {
            $handle = fopen($fileName, "a");
            fclose($handle);

            echo "<h3>No hay contactos</h3>";
        }
    ?>
</body>

</html>