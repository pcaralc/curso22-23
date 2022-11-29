<?php

    class ControladorPrestamo {

        public static function mostrarPrestamos() {
            $prestamos = PrestamoBD::getPrestamos();
            VistaPrestamosTodos::render($prestamos);
        }

        public static function modificarPrestamo($id, $fechaInicio, $fechaFin, $estado) {
            PrestamoBD::getModificados($id, $fechaInicio, $fechaFin, $estado);
        }

        public static function insertarPrestamo($idUsuario, $idLibro, $fechaInicio, $fechaFin, $estado){
            PrestamoBD::insertarPrestamo($idUsuario, $idLibro, $fechaInicio, $fechaFin, $estado);
            echo "<script>window.location='enrutador.php?accion=prestamos'</script>";
            
        }
        public static function buscarEstado($estado){
            $prestamos = PrestamoBD::buscarEstado($estado);
            VistaPrestamosTodos::render($prestamos);

        }

        public static function buscarDNI($dni){
            $prestamos = PrestamoBD::buscarDNI($dni);
            VistaPrestamosTodos::render($prestamos);

        }

    }



?>