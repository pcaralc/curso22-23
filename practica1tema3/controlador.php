<?php
//ACCIONES CON POST
if ($_POST) {

    if (isset($_POST['login'])) {
        $email = filtrado($_POST['email']);
        $contrasena = filtrado($_POST['contrasena']);
    }
}

if ($_POST) {

    if (isset($_POST['nuevoProyecto'])) {
        $nombre = filtrado($_POST['nombre']);
        $fechainicio = filtrado($_POST['fechainicio']);
        $fechafin = filtrado($_POST['fechafin']);
        $dias = filtrado($_POST['dias']);
        $porcentaje = filtrado($_POST['porcentaje']);
        $importancia = filtrado($_POST['importancia']);

        //Calculamos el id mayor
        $ids = array_column($_SESSION['proyectos'], 'id');
        $id = max($ids) + 1;

        array_push($_SESSION['proyectos'], ['id' => $id, 'nombre' => $nombre, 'fechainicio' => $fechainicio, 'fechafin' => $fechafin, 'dias' => $dias, 'porcentaje' => $porcentaje, 'importancia' => $importancia]);

        header("Location: proyectos.php");
    }

}

?>