<?php

    class ControladorEnlace{
        public static function mostrarEnlaces($idRegalo){
            $enlaces = EnlaceBD::getEnlaces($idRegalo);
            VistaEnlaces::render($enlaces);
        }

        public static function insertarEnlace($enlace){
            EnlaceBD::insertarEnlace($enlace);
            echo "<script>window.location='enrutador.php?accion=verRegalo&id=".$enlace->getIdRegalo()."'</script>";
            
        }

        public static function eliminarEnlace($id) {
            EnlaceBD::eliminarEnlace($id);
        }

        public static function devolverEnlaces($idRegalo){
            $enlaces = EnlaceBD::getEnlaces($idRegalo);
            return $enlaces;
        }

        public static function ordenar(){
            $idRegalo = unserialize($_SESSION['enlace'])->getIdRegalo();
            $enlaces = EnlaceBD::ordenar($idRegalo);

            VistaEnlaces::render($enlaces);
        }
    }

?>