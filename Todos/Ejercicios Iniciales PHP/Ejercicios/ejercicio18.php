<!DOCTYPE html>

<!--
    18. Realizar un script en PHP se obtenga un número aleatorio entre 1 y 100.
    Deberá mostrarse en pantalla el número generado y la suma de todos los números
    pares anteriores a él
-->

<html lang="es">

<?php
    function sumatorioPares() {
        $lector = 2;
        $sumatorio = 0;

        if ( isset($_POST['numero']) ){
            $lector = $_POST['numero'];

            for ($x = 2; $x < $lector; $x+=2) {
                $sumatorio += $x;
            }
            
            echo $sumatorio . "<br>";
        }  
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 18</title>
</head>

<body>
    <form name="pedirNumero" method="post" action="">
        <input type="number" name="numero" id="num" value="<?php echo isset($_POST['numero']) ? $_POST['numero'] : '' ?>" />
        <input type="submit" name="botonEnviar" id="Enviar formulario" />
    </form>

    <p> Suma de los pares anteriores: <?php sumatorioPares(); ?> </p> <br>   
</body>

</html>