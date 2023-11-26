<!DOCTYPE html>

<!--
    1. Crear una página web que pida NIE. Después, crea otra página que lo valide de la siguiente forma:
        • El DNI tiene que cumplir las siguientes reglas de los DNI españoles: 
        8 números y una letra. Pero se puede especificar también un NIE en cuyo caso consta de una letra (solo
        puede ser X, Y o Z) y 7 números más una letra final. La letra final del DNI cumple esta
        fórmula: los números se dividen entre 23 y se toma el resto. El resto se sustituye por
        una letra siguiendo el siguiente patrón:
        • En el caso de los NIE para calcular la letra final se hace lo mismo, pero sustituyendo la
        letra inicial por 0 si es una X, por 1 si es una Y y por 2 si es una Z.
        • Deberá mostrarse si el NIE introducido es correcto o no.

    Nota: Investiga la función preg_match e intenta utilizar expresiones regulares para la validación
-->

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio ampliación 1</title>
</head>

<body>
    <form method="post" action="">
        NIF: <input type="text" name="NIF" />
        <input type="submit" name="sendForm" value="Enviar" />
    </form>

    <?php
        //Guardo las letras correspondientes al final del DNI en su posición correspondiente al módulo
        $letra = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];

        //Se comprueba si el botón de enviar del formulario ha sido pulsado
        if ( isset($_POST["sendForm"]) ) {
            //Se comprueba si se ha introducido algo en el formulario
            if ( !empty($_POST["NIF"] ) ) {
                //Se comprueba si el NIF introducido es un NIE, si no se comprueba si es un DNI, si no muestra un mensaje de error
                if ( preg_match('/[XYZ]/', substr($_POST["NIF"], 0, 1)) ) {
                    //Se cambia la primera letra del NIE a la letra correspondiente
                    switch ( substr($_POST["NIF"], 0, 1) ) {
                        case "X":
                            $letraNIE = 0;
                            break;
                        case "Y":
                            $letraNIE = 1;
                            break;
                        case "Z":
                            $letraNIE = 2;
                            break;
                    }

                    //Se comprueba si el NIE es válido, mostrando en mensaje correspondiente
                    if ( substr($_POST["NIF"], -1) == $letra[($letraNIE . substr($_POST["NIF"], 1, 7))%23] ) {
                        echo "NIE válido";
                    } else {
                        echo "NIE no válido";
                    }
                } else if ( preg_match('/[0-9]{8}[A-Z]{1}/', $_POST["NIF"]) ) {
                    //Se comprueba si el DNI es válido, mostrando en mensaje correspondiente
                    if ( substr($_POST["NIF"], -1) == $letra[substr($_POST["NIF"], 0, 8)%23] ) {
                        echo "DNI válido";
                    } else {
                        echo "DNI no válido";
                    }
                } else {
                    echo "NIF no válido";
                }
            } else {
                echo "Debe introducir su NIF";
            } 
        }
    ?>
</body>