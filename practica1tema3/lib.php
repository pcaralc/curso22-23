<?php
    function crearTabla($array){
        foreach($array as $proyecto){
            echo ("<tr>");
            for($i=0; $i< count($proyecto)-1; $i++){
                echo("<td>");
                    // echo ("hola");
                    $proyecto[$i];
                echo("</td>");
            }
            echo("</tr>");
        }
    };    


     //Función para limpiar los input de los formularios
     function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }
?>