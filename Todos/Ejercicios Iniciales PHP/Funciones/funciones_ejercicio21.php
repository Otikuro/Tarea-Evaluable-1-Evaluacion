<?php
    function mostrarAgenda ($agenda) {
        echo "<table>" .
        "<tr>" .
            "<th colspan='4'> Agenda </th>" .
        "</tr>" . 
        "<tr>" .
            "<th> Clave </th>" .
            "<th> Clave </th>" .
            "<th> Contenido </th>" .
        "</tr>";
       
        foreach ($agenda as $clave => $valor) {
            echo 
                "<tr>" .
                    "<td rowspan='4' >" . $clave . "</td>" .     
                    "<td> Nombre</td>" . 
                    "<td>" . $valor["Nombre"] . "</td>" . 
                "</tr>" .
                "<tr>" .   
                    "<td> Dirección </td>" . 
                    "<td>" . $valor["Direccion"] . "</td>" . 
                "</tr>" .
                "<tr>" .   
                    "<td> Teléfono </td>" . 
                    "<td>" . $valor["Telefono"] . "</td>" . 
                "</tr>" .                
                "<tr>" .   
                    "<td> Correo </td>" . 
                    "<td>" . $valor["Correo"] . "</td>" . 
                "</tr>";
        }
        echo "</table>";
    }

    function comprobarCorreo ($correo) {
        $dominiosValidos = ["@gmail.com", "@educa.madrid.org", "@yahoo.com", "@hotmail.com"];
 
        for ($i = 0; $i < count($dominiosValidos); $i++) {
            if ( substr($correo, strrpos($correo, "@")) == $dominiosValidos[$i] )   return true;
        }

        return false;
    }
?>