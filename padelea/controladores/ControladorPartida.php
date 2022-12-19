<?php
    class ControladorPartida{

        public static function mostrarPartidas(){

            $partidas = PartidaBD::getPartidas();
            VistaPartidas::render($partidas);
        }

        public static function addJugador(){

        }

        public static function delete(){

        }
        public static function insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto){
            $estado = "abierta";

           $idPartida = PartidaBD::insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto,$estado);
            $idJugador = unserialize($_SESSION['jugador'])->getId();
           JugadorPartidaBD::insertarJugador($idPartida, $idJugador);
            self::addArray($idJugador, $idPartida);

            
        }
        public static function addArray($idJugador, $idPartida){
            $jugador = JugadorBD::getJugador($idJugador);
            $partida = PartidaBD::getPartida($idPartida);

            if(count($partida->getJugadores())< 4){
                $partida->nuevoJugador($jugador);
            }else{
                $partida->setCubierto("Cerrada");
            }
            echo "<script>window.location='enrutador.php?accion=partidas'</script>";
            
        }

        public static function eliminarPartida($id) {
            PartidaBD::eliminarPartida($id);
            echo "<script>window.location='enrutador.php?accion=partidas'</script>";
        }

        public static function verPartida($idPartida){
            $partida = PartidaBD::getPartida($idPartida);
            VistaPartidaJugadores::render($partida);
        }

        public static function buscarFecha($fecha){
            $partidas = PartidaBD::buscarFecha($fecha);
            VistaPartidas::render($partidas);

        }

        public static function buscarCiudad($ciudad){
            $partidas = PartidaBD::buscarCiudad($ciudad);
            VistaPartidas::render($partidas);

        }

    }



?>