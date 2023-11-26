<!DOCTYPE html>

<!--
9. Realizar un programa en php donde dado un número del 1 al 7 indique a que día de la semana corresponde. 
Si el número no está entre 1 y 7 el programa lo deberá de indicar.
Usar formularios
-->

<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>

    <?php
        function diaSemana($day) {
            switch ($day) {
                case 1: 
                    echo "Lunes";
                    break;
                case 2: 
                    echo "Martes";
                    break;
                case 3: 
                    echo "Miercoles";
                    break;
                case 4: 
                    echo "Jueves";
                    break;
                case 5: 
                    echo "Viernes";
                    break;
                case 6: 
                    echo "Sabado";
                    break;
                case 7: 
                    echo "Domingo";
                    break;
                default: 
                    echo "No es un día de la semana" ;
            }
        }
    ?>
</head>

<body>
    <form name="dia" method="post" action="">
        <input type="number" name="day" id="day" />
        <input type="submit" name="sendForm" id="sendForm" />
    </form>

    <?php 
        if ( isset($_POST['sendForm']) ) {
            diaSemana($_POST['day']); 
        }
    ?>    
</body>

</html>