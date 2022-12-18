<?php
    class ControladorPartida{
        static function nuevaPartida(){
            $jugador = new Jugador();
            $crupier = new Jugador();
            $baraja = new BarajaInglesa();

            $partida = new Partida($jugador, $crupier, $baraja);

            $_SESSION['partida']= serialize($partida);

           
            
        }

        static function pedirCarta(){
            $partida = unserialize($_SESSION['partida']);

            if($partida->getJugador()->valorMano() <17){
                $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());
                $partida->getJugador()->nuevaCarta($partida->getBaraja()->repartirCarta());
            }else{
                //tiene que plantarse
            }


            if($partida->getCrupier()->valorMano() <17){
                $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());
                $partida->getCrupier()->nuevaCarta($partida->getBaraja()->repartirCarta());
            }

            VistaPartida::render();
        }
    }
?>