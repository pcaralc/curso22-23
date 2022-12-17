<?php
    class ControladorRegalo{

        public static function mostrarRegalos(){
            //LLamar al modelo para obtener todas las películas en un array de Pelicula
            $id = unserialize($_SESSION['usuario'])->getId();
            $regalos = RegaloBD::getRegalos($id);

            //Llamar a una vista para pintar esas películas
            VistaRegalos::render($regalos);
        }

        public static function devolverRegalos(){
            //LLamar al modelo para obtener todas las películas en un array de Pelicula
            $id = unserialize($_SESSION['usuario'])->getId();
            $regalos = RegaloBD::getRegalos($id);

            return $regalos;
        }


        public static function eliminarRegalo($id) {
            RegaloBD::eliminarRegalo($id);
        }

        public static function modificarRegalo($id, $nombre, $destinatario, $precio, $estado, $year) {
            RegaloBD::getModificados($id, $nombre, $destinatario, $precio, $estado, $year);
        }

        public static function insertarRegalo($idUsuario, $nombre, $destinatario, $precio, $estado, $year){
            RegaloBD::insertarRegalo($idUsuario, $nombre, $destinatario, $precio, $estado, $year);
            echo "<script>window.location='enrutador.php?accion=regalos'</script>";
            
        }

        public static function buscarYear($yea){
            $regalos = RegaloBD::buscarYear($yea);
            VistaRegalos::render($regalos);

        }



    }



?>