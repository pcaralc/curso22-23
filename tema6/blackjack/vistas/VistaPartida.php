<?php
    class VistaPartida{
        public static function render(){

            include "cabecera.php";

            $partida = unserialize($_SESSION['partida']);
            $jugador = $partida->getJugador();
            $crupier = $partida->getCrupier();
            $ruta = "./img/";
    
            $carta = $crupier->getMano()[count($crupier->getMano()) - 1];

            $cartaImg = $carta->getPalo().$carta->getFigura();

            $ruta .= $cartaImg;



            echo'<img src="'.$ruta.'.png">';

            include "pie.php";
        }
    }
?>