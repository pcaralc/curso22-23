<?php
class BarajaInglesa extends baraja{
    static $palos = array("c", "d", "p", "t");
    static $figuras = array(1,2,3,4,5,6,7,8,9,10,11,12,13);

    function __construct(){
        parent::__construct();
        $this->generarMazo();
        $this->barajar();
    }

    private function generarMazo(){
        foreach (self::$figuras as $figura) {
            foreach(self::$palos as $palo) {
                array_push($this->mazo, new Carta($palo, $figura));
            }
        }
    }

    public function repartirCarta(){
        return array_shift($this->mazo);
    }
    
}
?>