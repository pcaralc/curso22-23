<?php
class Carta{
    private $palo;
    private $figura;
    
    public function __construct($palo = "", $figura = ""){
        $this -> palo = $palo;
        $this -> figura = $figura;
    }

    /**
     * Get the value of palo
     */ 
    public function getPalo()
    {
        return $this->palo;
    }

    /**
     * Set the value of palo
     *
     * @return  self
     */ 
    public function setPalo($palo)
    {
        $this->palo = $palo;

        return $this;
    }

    /**
     * Get the value of figura
     */ 
    public function getFigura()
    {
        return $this->figura;
    }

    /**
     * Set the value of figura
     *
     * @return  self
     */ 
    public function setFigura($figura)
    {
        $this->figura = $figura;

        return $this;
    }

    /**
     * Devueve el valor de la carta 
     */
    public function getValor(){
        if($this -> figura <= 9){
            return $this -> figura;
        }else if($this-> figura = 1){
            return 11;
        }else if($this -> figura > 9){
            return 10;
        }

    }

    public function __toString(){
        echo "La figura es: ".$this->figura." y el palo es ". $this->palo;
    }
}


?>