<?php
class Jugador{
    private $mano;

    function __construct(){
        $this->mano = [];
    }

    function nuevaCarta($carta){
        array_push($carta);
    }

    function __toString(){
        print_r($this->mano);
    }

    function valorMano(){
        $total=0;

        foreach ($this->mano as $carta) {
            $total += $carta->getValor();
        }

        foreach ($this->mano as $carta) {
            if ($carta->getFigura() == 1) { 
                if ($total > 21) {
                    $total = $total - 10; // le quitamos 10 para que el valor de la carta sea 1
                }
            }
        }
    }
}
?>