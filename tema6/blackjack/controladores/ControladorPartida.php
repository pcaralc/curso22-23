<?php
    class ControladorPartida{
        function nuevaPartida(){
            $jugador = new Jugador();
            $crupier = new Jugador();
            $baraja = new BarajaInglesa();

            $partida = new Partida($jugador, $crupier, $baraja);
            
            $_SESSION['partida'] = serialize($partida);

        }
    }
?>