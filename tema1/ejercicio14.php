<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
    ?>

    <div class="col-md-8 themed-grid-col">
        <div class="flex-shrink-0 p-3 bg-white">
            <?php
            /*Crea un array de notas de alumnos. Cada elemento del array debe contener las
    notas de un alumno, incluyendo nombre, materia y nota. Haz un programa con 10
    notas de alumnos. Luego debes mostrar las notas ordenadas en orden
    descendente por alumno, luego ordenadas por nombre, luego mostrar la nota
    media del curso, y el número de alumnos suspensos. */

            function suspenso($nota)
            {
                return $nota < 5;
            }

            $notas = array(
                array("nombre" => "Alumno1", "materia" => "Servidor", "nota" => 7),
                array("nombre" => "Alumno1", "materia" => "Cliente", "nota" => 8),
                array("nombre" => "Alumno2", "materia" => "Servidor", "nota" => 3),
                array("nombre" => "Alumno2", "materia" => "Cliente", "nota" => 7),
                array("nombre" => "Alumno3", "materia" => "Servidor", "nota" => 8),
                array("nombre" => "Alumno3", "materia" => "Cliente", "nota" => 8),
                array("nombre" => "Alumno4", "materia" => "Servidor", "nota" => 6),
                array("nombre" => "Alumno4", "materia" => "Cliente", "nota" => 4),
                array("nombre" => "Alumno5", "materia" => "Servidor", "nota" => 7),
                array("nombre" => "Alumno5", "materia" => "Cliente", "nota" => 9),
                array("nombre" => "Alumno6", "materia" => "Servidor", "nota" => 5),
                array("nombre" => "Alumno6", "materia" => "Cliente", "nota" => 6),
            );

            array_multisort(array_column($notas, "nombre"), SORT_DESC, array_column($notas, "nota"), $notas);

            foreach ($notas as $valor) {
                echo $valor["nombre"] . " - " . $valor["materia"] . " - " . $valor["nota"] . "<br>";
            }

            echo array_sum(array_column($notas, "nota")) / count($notas);
            echo "<br>";
            echo count(array_filter(array_column($notas, "nota"), "suspenso"));
            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>