<!DOCTYPE html>

<!--
2. Escribe un programa PHP que permita al usuario introducir tres números
    • Dos de ellos serán los límites inferior y superior de un rango, el tercero será un número
    situado dentro de dicho rango
    • Cuando el programa reciba los datos generará un número aleatorio entre los límites
    inferior y superior y lo comparará con el tercer valor.
    • Finalmente se informará al usuario si ha acertado el número aleatorio o no y cuantos
    intentos lleva. En caso de fallo, la aplicación le permitirá realizar un nuevo intento con
    los límites introducidos al principio (es decir podrá intentar adivinar de nuevo el número
    aleatorio que se mantiene mientras no se introduzcan nuevos límites).
    • Debe haber un enlace para comenzar una nueva partida.
-->


<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ampliación - Ejercicio 2</title>
        
    <link rel="stylesheet" href="../Estilos/ampliacion2.css">

    <?php
        session_start();
    ?>
</head>

    <body>

        <form name="pedirDatos" method="post" action="">  
            <fieldset>
                <label for="max">Límite inferior</label>
                <input type="number" name="max" id="max" value="<?php echo isset($_POST['max']) ? $_POST['max'] : '' ?>" /> <br>
                
                <label for="min">Límite superior</label>
                <input type="number" name="min" id="min" value="<?php echo isset($_POST['min']) ? $_POST['min'] : '' ?>" /> <br>
                
                <label for="guess">Intento de adivinación</label>
                <input type="number" name="guess" id="guess" /> <br>
            </fieldset>
            
            <input type="submit" name="send" id="send" value="Enviar" />
        </form>


        <?php
            if ( isset($_POST["send"]) ) {
                $_SESSION = array_merge($_SESSION, $_POST);     
                array_key_exists("secretNumber", $_SESSION) ? "" : $_SESSION["secretNumber"] = mt_rand($_SESSION["max"], $_SESSION["min"]); 
                array_key_exists("attempts", $_SESSION) ? "" : $_SESSION["attempts"] = 1; 
            
                if ( $_SESSION["guess"] == $_SESSION["secretNumber"] ) {
                    echo "VICTORIA!<br>";
                    echo "Ha acertado en " . $_SESSION["attempts"] . " intentos";
                    unset($_SESSION["secretNumber"]);
                    unset($_SESSION["attempts"]);
                } else {
                    echo "Número incorrecto, el número es " . ($_SESSION["guess"] < $_SESSION["secretNumber"] ? "mayor" : "menor") . "<br>";
                    echo "Vuelva a intentarlo";
                    $_SESSION["attempts"] = $_SESSION["attempts"] + 1; 
                }
            }
        ?>
    
    </body>

</html>