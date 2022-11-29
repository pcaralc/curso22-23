<?php
    
    //AUTOLOAD
    function autocarga($clase){ 
        $ruta = "./controladores/$clase.php"; 
        if (file_exists($ruta)){ 
          include_once $ruta; 
        }

        $ruta = "./modelos/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/prestamos/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/libros/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/usuarios/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }
    } 
    spl_autoload_register("autocarga");


    //Función para filtrar los campos del formulario
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    if ($_REQUEST) {
        if (isset($_REQUEST['accion'])) {

            //Inicio
            if ($_REQUEST['accion'] == "inicio") {
                ControladorPrestamo::mostrarPrestamos();
            }

            //Ver libro en detalle
            if ($_REQUEST['accion'] == "verLibro") {
                $id = filtrado($_REQUEST['id']);
                ControladorLibro::mostrarLibro($id);
            }

            //Ver los prestamos
            if ($_REQUEST['accion'] == "prestamos") {
                ControladorPrestamo::mostrarPrestamos();
            }

            //Ver los libros
            if ($_REQUEST['accion'] == "libros") {
                ControladorLibro::mostrarLibros();
            }

            //Ver los usuarios
            if ($_REQUEST['accion'] == "usuarios") {
                ControladorUsuario::mostrarUsuarios();
            }

            //Ver usuario en detalle
            if ($_REQUEST['accion'] == "verUsuario") {
                $id = filtrado($_REQUEST['id']);
                ControladorUsuario::mostrarUsuario($id);
            }

        }
        if (isset($_GET["modificar"])) {
            $id = filtrado($_REQUEST['id']);
            $fechaInicio = filtrado($_REQUEST['fechaInicio']);
            $fechaFin = filtrado($_REQUEST['fechaFin']);
            $estado = filtrado($_REQUEST['estado']);
            ControladorPrestamo::modificarPrestamo($id, $fechaInicio, $fechaFin, $estado);
            ControladorPrestamo:: mostrarPrestamos();

        }

        if (isset($_GET["insertarPrestamo"])) {
            $idUsuario = filtrado($_REQUEST['usuario']);
            $idLibro = filtrado($_REQUEST['libro']);
            $fechaInicio = filtrado($_REQUEST['fechaInicio']);
            $fechaFin = filtrado($_REQUEST['fechaFin']);
            $estado = filtrado($_REQUEST['estado']);
            ControladorPrestamo::insertarPrestamo($idUsuario, $idLibro, $fechaInicio, $fechaFin, $estado);
            ControladorPrestamo:: mostrarPrestamos();
        }

        if (isset($_GET["buscarE"])) {
            $estado = filtrado($_REQUEST['buscarEstado']);
            ControladorPrestamo::buscarEstado($estado);
        }

        if (isset($_GET["buscarDNI"])) {
            $dni = filtrado($_REQUEST['dni']);
            ControladorPrestamo::buscarDNI($dni);
        }
    }





?>