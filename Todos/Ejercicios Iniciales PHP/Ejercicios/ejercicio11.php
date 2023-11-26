<!DOCTYPE html>

<!-- 
    11. Realiza un programa en php donde dada la cadena: “Estamos dando nuestros primeros pasos en programación utilizando el lenguaje php” imprima por pantalla:
        • La longitud de la cadena.
        • La primera ocurrencia de “os”.
        • La búsqueda de la palabra “nuestros”.
        • La subcadena “lenguaje php”.
        • La subcadena “nuestros primeros pasos”.
        • El reemplazo de las palabras "estamos" por "estoy" y "nuestros" por "mis".
        • Todas las letras de la cadena en minúsculas.
        • Todas las letras de la cadena en mayúsculas

        • La frase con todas las letras iniciales de cada palabra en mayúscula.
-->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>

<body>
    <?php 
        $frase = "Estamos dando nuestros primeros pasos en programación utilizando el lenguaje php";

        echo $frase . "<br>";
        echo "La anterior frase tiene " . mb_strlen($frase) . " carcateres de longitud <br>";
        echo substr($frase, strpos($frase, "os"), mb_strlen("os")) . "<br>";
        echo strpos($frase, "nuestros") . "<br>";
        echo substr($frase, strpos($frase, "lenguaje php"), mb_strlen("lenguaje php")) . "<br>";
        echo substr($frase, strpos($frase, "nuestros primeros pasos"), mb_strlen("nuestros primeros pasos")) . "<br>";
        echo str_ireplace("nuestros", "mis", str_ireplace("estamos", "estoy", $frase));
        echo strtolower($frase) . "<br>";
        echo strtoupper($frase) . "<br>";
        echo ucwords($frase) . "<br>";
    ?>      
</body>

</html>