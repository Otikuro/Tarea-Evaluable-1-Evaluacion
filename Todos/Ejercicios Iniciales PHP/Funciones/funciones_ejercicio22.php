<?php
    $separador = "-------------------------------------------------------------------------- <br>";

    function mostrarArray(array $array): void {
        global $separador;
        echo $separador;
    
        foreach($array as $clave => $valor) {
            echo "Empleado: " . $clave . " Nombre: " . $valor["Nombre"] . " Edad: " . $valor["Edad"] . " Salario: " . $valor["Salario"] . "<br>";
        }
    
            echo $separador;
    }
    

    function actualizarSalario(string $nombre, int $edad, float &$salario): void {
        $salario = ($salario < 1000) ? ( ($edad < 30) ? ($salario = 1500) : ( ($edad > 45) ? ($salario += $salario*0.15) : ($salario += $salario*0.03) ) ) : ( ($edad > 45) ? ($salario += $salario*0.04) : ($salario += $salario*0.1) );
        
        //Versión desglosada de los ternarios
/*        
        if ($salario < 1000) {
            if ($edad < 30) {
                $salario = 1500;
            } else if ($edad > 45) {
                $salario += $salario*0.15;
            } else {
                $salario += $salario*0.03;
            }
        } else {
            if ($edad > 45) {
                $salario += $salario*0.04;
            } else {
                $salario += $salario*0.1;
            }
        }
      */

        echo $nombre . ": " . $salario . "<br>";
    }
?>