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
}
?>