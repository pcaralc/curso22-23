<?php
abstract class Baraja {

    private $mazo;

    abstract protected function repartirCarta();

    function __construct(){
        $this->mazo = [];
    }

    function barajar(){
        shuffle($this->mazo);
        return $this->mazo;
    }

    function listar(){
        print_r($this->mazo);
    }

    /**
     * Get the value of mazo
     */ 
    public function getMazo()
    {
        return $this->mazo;
    }

    /**
     * Set the value of mazo
     *
     * @return  self
     */ 
    public function setMazo($mazo)
    {
        $this->mazo = $mazo;

        return $this;
    }
}
?>