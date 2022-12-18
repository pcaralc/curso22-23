<?php
    class Partida{
        private $jugador;
        private $crupier;
        private $baraja;

        function __construct($jugador, $crupier, $baraja){
            $this->jugador = $jugador;
            $this->crupier = $crupier;
            $this->baraja = $baraja;
            $this->baraja->barajar();
        }


        

        /**
         * Get the value of jugador
         */ 
        public function getJugador()
        {
                return $this->jugador;
        }

        /**
         * Set the value of jugador
         *
         * @return  self
         */ 
        public function setJugador($jugador)
        {
                $this->jugador = $jugador;

                return $this;
        }

        /**
         * Get the value of crupier
         */ 
        public function getCrupier()
        {
                return $this->crupier;
        }

        /**
         * Set the value of crupier
         *
         * @return  self
         */ 
        public function setCrupier($crupier)
        {
                $this->crupier = $crupier;

                return $this;
        }

        /**
         * Get the value of baraja
         */ 
        public function getBaraja()
        {
                return $this->baraja;
        }

        /**
         * Set the value of baraja
         *
         * @return  self
         */ 
        public function setBaraja($baraja)
        {
                $this->baraja = $baraja;

                return $this;
        }
    }
?>