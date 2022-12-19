<?php
session_start();
//session_destroy();

//AUTOLOAD
function autocarga($clase)
{
    $ruta = "./controladores/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/partidas/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }
}
spl_autoload_register("autocarga");

//Función para filtrar los campos del formulario
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if($_REQUEST){
    if (isset($_REQUEST['accion'])) {
        if ($_REQUEST['accion'] == "inicio") {
            ControladorLogin::mostrarLogin();
        }
        if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorLogin::comprobarLogin($email, $password);
        }
    
        if ($_REQUEST['accion'] == "error") {
            ControladorLogin::mostrarLoginError();
        }
        if ($_REQUEST['accion'] == "partidas") {
            ControladorPartida::mostrarPartidas();
        }
        if ($_REQUEST['accion'] == "cerrar") {
            session_destroy();
            ControladorLogin::mostrarLogin();
        }
        if ($_REQUEST['accion'] == "eliminar") {
            $id = filtrado($_REQUEST['id']);
            ControladorPartida::eliminarPartida($id);
        }
        if ($_REQUEST['accion'] == "verPartida") {
            $idPartida = filtrado($_REQUEST['id']);
            
            ControladorPartida::verPartida($idPartida);
        }
    }

    if (isset($_REQUEST["insertarPartida"])) {
        $fecha = filtrado($_REQUEST['fecha']);
        $hora = filtrado($_REQUEST['hora']);
        $ciudad = filtrado($_REQUEST['ciudad']);
        $lugar = filtrado($_REQUEST['lugar']);

        $cubierta;
        if($_REQUEST['cubierta']==true){
            $cubierta=1;
        }else{
            $cubierta=0;
        }
    

        ControladorPartida::insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierta);

    }

    if (isset($_REQUEST["buscarFecha"])) {
        $fecha = filtrado($_REQUEST['fecha']);
        ControladorPartida::buscarFecha($fecha);
    }
    if (isset($_REQUEST["buscarCiudad"])) {
        $ciudad = filtrado($_REQUEST['ciudad']);
        ControladorPartida::buscarCiudad($ciudad);
    }
}

?>