<?php
class BarajaInglesa extends baraja{
    static $palos = array("c", "d", "p", "t");
    static $figuras = array(1,2,3,4,5,6,7,8,9,10,11,12,13);

    function __construct(){
        parent::__construct();
        self::generarMazo();
        $this->barajar();
    }

    private function generarMazo(){
        for ($i = 0; $i < count(self::$palos); $i++) {
            for ($j = 0; $j < count(self::$figuras); $j++) {
                array_push($this->mazo, new Carta(self::$palos[$i], self::$figuras[$j]));
            }
        }
    }

    public function repartirCarta(){
        return array_shift($this->mazo);
    }
    
}
?>