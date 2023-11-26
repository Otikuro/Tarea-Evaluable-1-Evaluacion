<?php
    function rellenarArray (array $numeros): array { 
        global $numeros;
        
        do {
            $nuevoNumero = mt_rand(1, 30);

            (isset($numeros[$nuevoNumero])) ? ($numeros[$nuevoNumero] += 1) : ($numeros[$nuevoNumero] = 0) ;
        } while (count($numeros) <= 20);

        krsort($numeros);

        return $numeros;
    }

    function mostrarArray (array $numeros): void {
        echo 
        "<table>".
            "<tr>";
                foreach ($numeros as $clave => $valor) {
                    echo ( ($clave%2 == 0) ? ("<td class='par'>") : ("<td class='impar'>") ) . $clave . '</td>';
                }
        echo 
            "</tr>" .
        "</table>";
    }

    function mostrarRepetidos (array $numeros): void {
        $acumulador = 0;

        foreach ($numeros as $clave => $valor) {
            $acumulador += $valor;        
        }
        
        echo "<h2>Repiticiones</h2>";
        echo "Ocurrieron " . $acumulador . " repeticiones totales<br>";
       
        foreach ($numeros as $clave => $valor) {      
            if ($valor != 0)    echo "<br>El número " . $clave . " se repitio " . $valor . " veces";
        }
    }
?>