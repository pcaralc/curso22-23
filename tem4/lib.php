<?php
    function crearTabla(){
        if (isset($_SESSION["proyectos"])) {
                foreach($_SESSION['proyectos'] as $proyecto){
                    echo ("<tr>");
                        echo ("<td>".$proyecto['nombre']."</td>");
                        echo ("<td>".$proyecto['fechaInicio']."</td>");
                        echo ("<td>".$proyecto['fechaFinPrevista']."</td>");
                        echo ("<td>".dias($proyecto['fechaInicio'],$proyecto['fechaFinPrevista'],$proyecto['diasTranscurridos'])."</td>");
                        echo ("<td>".$proyecto['porcentajeCompletado']."</td>");
                        echo ("<td>".$proyecto['importancia']."</td>");
                        echo ("<td><a class='btn btn-success btn-circle' href='verProyecto.php?id=". $proyecto["id"]. "'><i class='fas fa-info-circle'></i></a></>");
                        echo ("<td><a  class='btn btn-danger btn-circle' href='controlador.php?accion=eliminar&id=".$proyecto["id"]."'><i class='fas fa-trash'></i></a></td>");
                    echo("</tr>");
                }
            }
    };    

    //Funcion comprobar que no se introducen más días transcurridos de los posibles
    function dias($fechaInicio, $fechaFin, $diasTranscurridos){
        $dias = (strtotime($fechaInicio)-strtotime($fechaFin))/86400;
        $dias = abs($dias); 
        $dias = floor($dias);

        if($diasTranscurridos>$dias){
            return $dias;
        }else{
            return $diasTranscurridos;
        }
           
    }

     //Función para limpiar los input de los formularios
     function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }
?>