<!DOCTYPE html>

<!--
    17. Crea un array asociativo que contenga la siguiente información:
    Array supermercado:
    Fruta (Pera, Manzana, Plátano)
    Verdura (Berenjena, Calabacín)
    Lácteos (leche, yogur, queso, kéfir)

    Muestra el array en pantalla haciendo uso del bucle foreach.
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>

<body>
    <?php
        $supermercado = [
            "Fruta" => ["Pera", "Manzana", "Plátano"], 
            "Verdura" => ["Berenjena", "Calabacín"],
            "Lácteos" => ["Leche", "yogur", "Queso", "Kéfir"]
        ];

        foreach ($supermercado as $clave => $valor) {
            echo "Categoría: " . $clave . "<br>";

            foreach ($valor as $indice => $producto) {
                echo "- " . $producto . "<br>";
            }

            echo "<br>";
        }
    ?>
</body>

</html>