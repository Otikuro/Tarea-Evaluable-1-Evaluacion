<!DOCTYPE html>

<!--
    16. Realiza una matriz de 3 filas por 4 columnas. 
    El contenido de cada uno de los elementos de la matriz se generará de manera aleatoria. Una vez generada:
        • Muestra el contenido de la matriz en formato filas x columnas
        • Identifica el número mayor y menor generado dentro de la matriz
        • Calcula la media de los números impares contenidos en la matriz
        • Imprime únicamente la diagonal
        • Imprime únicamente la primera columna
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>

<body>
    <?php
        $numbers;
        $odds;
        $maxNumber = 1;
        $minNumber = 20;

        //Rellenamos el array con números aleatorios del 1 al 20
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $numbers[$i][$j] = mt_rand(1, 20);
            }
        }

        //Mostramos el array
        for ($i = 0; $i < count($numbers); $i++) {
            for ($j = 0; $j < count($numbers[$i]); $j++) {
                echo $numbers[$i][$j] . ($j == count($numbers[$i])-1 ? "" : ", ");
            }
            echo "<br>";
        }

        echo "<br>-----------------------------------------------<br>";

        //Buscamos el número más grande dentro del array
        for ($i = 0; $i < count($numbers); $i++) {
            $maxNumber = $maxNumber < max($numbers[$i]) ? max($numbers[$i]) : $maxNumber;
        }

        echo "El mayor número del array es: " . $maxNumber . "<br>";


        //Buscamos el número más pequeño del array
        for ($i = 0; $i < count($numbers); $i++) {
            $minNumber = $minNumber > min($numbers[$i]) ? min($numbers[$i]) : $minNumber;
        }

        echo "El menor número del array es: " . $minNumber . "<br>";
      

        //Guardamos los números impares en un array
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ( $numbers[$i][$j] % 2 != 0 ) {
                    $odds[] = $numbers[$i][$j];
                }
            }
        }

        //Mostramos la media de los números impares
        echo "El array contiene " . count($odds) . " números impares (";
        for ($i = 0; $i < count($odds); $i++){
            echo $odds[$i] . ($i == count($odds)-1 ? "" : ", ");
        }
        echo ") y su media es : " . ( array_sum($odds)/count($odds) ) . "<br>";


        echo "<br>-----------------------------------------------<br>";


        //Mostramos la diagonal del array
        for ($i = 0; $i < count($numbers); $i++) {
            for ($j = 0; $j < count($numbers[$i]); $j++) {
                echo ( ( $i == $j ) ? $numbers[$i][$j] : "*" ) . ($j == count($numbers[$i])-1 ? "" : ", ");
            }
            echo "<br>";
        }      
        

        echo "<br>-----------------------------------------------<br>";

        
        //Mostramos la primera columna del array
        for ($i = 0; $i < count($numbers); $i++) {
            for ($j = 0; $j < count($numbers[$i]); $j++) {
                echo ( ( $j == 0 ) ? $numbers[$i][$j] : "*" ) . ($j == count($numbers[$i])-1 ? "" : ", ");
            }
            echo "<br>";
        }              
    ?>
</body>

</html>