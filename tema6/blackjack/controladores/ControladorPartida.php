<?php
    class ControladorPartida{
        static function nuevaPartida(){
            $jugador = new Jugador();
            $crupier = new Jugador();
            $baraja = new BarajaInglesa();

            $partida = new Partida($jugador, $crupier, $baraja);
            $_SESSION['partida']= serialize($partida);

            self::pedirCarta();
            
        }

        static function pedirCarta(){
            $partida = unserialize($_SESSION['partida']);
            $jugador = $partida->getJugador();
            $crupier = $partida->getMaquina();
            $baraja = $partida->getBaraja();

            if($partida->$jugador->valorMano() <17){
                $mazo = $baraja ->getMazo();
                $cartasJ= new Carta($mazo->getPalo(), $mazo->getFigura());
                $partida->$jugador->nuevaCarta($cartasJ);
            }else{
                //tiene que plantarse
            }


            if($partida->$crupier->valorMano() <17){
                $mazo = $baraja ->getMazo();
                $cartasC= new Carta($mazo->getPalo(), $mazo->getFigura());
                $partida->$crupier->nuevaCarta($cartasC);
            }

            VistaPartida::render();
        }
    }
?>