<?php session_start(); ?>
<?php
include("lib.php");

//ACCIONES CON GET
if ($_GET) {

    //Eliminar un proyecto
    if ($_GET['accion'] == "eliminar") {
       unset($_SESSION['proyectos'][$_GET['id']]);
       
        header("Location: proyectos.php");
    }


    //Eliminar todo
    if ($_GET['accion'] == "eliminarTodo") {
        $_SESSION['proyectos'] = array();
        header("Location: proyectos.php");
    }

     //Salir
     if ($_GET['accion'] == "salir") {
        session_destroy();
        header("Location: login.php");
    }

}





//ACCIONES CON POST


if ($_POST) {

    if (isset($_POST['nuevo'])) {
        $nombre = filtrado($_POST['nombre']);
        $fechainicio = filtrado($_POST['fechainicio']);
        $fechafin = filtrado($_POST['fechafin']);
        $dias = filtrado($_POST['dias']);
        $porcentaje = filtrado($_POST['porcentaje']);
        $importancia = filtrado($_POST['importancia']);

        //Calculamos el id del proyecto
        
        $ids = array_column($_SESSION['proyectos'], 'id');
        $id = max($ids) + 1;
        
        //si no hay ningún proyecto metido
        // if(empty($_SESSION['proyectos'])){
        //     $id = 0;
        // }else{
        //     $ids = array_column($_SESSION['proyectos'], 'id');
        //     $id = max($ids) + 1;
        // }
        
        
        $proyecto = ['id' => $id, 'nombre' => $nombre, 'fechaInicio' => $fechainicio, 'fechaFinPrevista' => $fechafin, 'diasTranscurridos' => $dias, 'porcentajeCompletado' => $porcentaje, 'importancia' => $importancia];
        $_SESSION['proyectos'][] = $proyecto;

        header("Location: proyectos.php");
    }

    if(isset($_POST['email'])){
        $_SESSION['email'] =    ($_POST['email']);
        $contrasena = filtrado($_POST['contrasena']);

        header("Location: proyectos.php");
    }

    if(isset($_POST['contrasena'])){
        $contrasena = filtrado($_POST['contrasena']);

        $separado = str_split($contrasena);
        $encontrado = false;
        for ($i = 0; $i <count($separado); $i++) {
            if($separado[$i] == strtoupper($separado[$i])){
                $encontrado = true;
                break;
            } 
        }

        if((strlen($contrasena)>=8) && ($encontrado == true) ){
            header("Location: proyectos.php");
        }else{
            header("Location:login.php?error");
        }
    }

}

?>