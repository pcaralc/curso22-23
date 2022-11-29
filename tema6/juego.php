<?php
class Juego{
    private $nombre;
    private $genero; 
    private $plataforma;
    private $trucos;

    function __construct($nombre, $genero, $plataforma){
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->plataforma = $plataforma;

        //inicializar array
        $this->trucos = array();
    }

    //muestra el nombre
    function getNombre(){
        return $this->nombre;
    }

    //añades el nombre
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    //muestra el género
    function getGenero(){
        return $this->genero;
    }

    //añade el género
    function setGenero($genero){
        $this->genero = $genero;
    }

    //muestra la plataforma
    function getPlataforma(){
        return $this->plataforma;
    }

    //añade la plataforma
    function setPlataforma($plataforma){
        $this->plataforma = $plataforma;
    }

    //pinta los juegos y los trucos que lleve
    function pintar(){
        echo "<p>".$this->nombre."</p>";
        echo "<p>".$this->genero."</p>";
        echo "<p>".$this->plataforma."</p>";

        foreach($this->trucos as $truco){
            $truco ->pintar();
        } 
    }

    //añade un truco al array de trucos
    function addTruco(Truco $untruco){
        array_push($this->trucos, $untruco);
    }

    //borras un truco del array de trucos
    function borrarTruco(Truco $untruco){
        foreach($this->trucos as $posicion => $truco){
            if($truco == $untruco) {
                unset($this->trucos[$posicion]);
            }
        }
    }

}

class Truco{
    private $nombre;
    private $descripcion;

    function __construct($nombre, $descripcion){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    //muestra el nombre
    function getNombre(){
        return $this->nombre;
    }

    //añade el nombre
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    //muestra la descripcion
    function getDescripcion(){
        return $this->descripcion;
    }

    //añde la descripcion
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    //pintamos los trucos
    function pintar(){
        echo "<p>".$this->nombre."</p>";
        echo "<p>".$this->descripcion."</p>";

    }
}

$juego = new Juego("Juego1", "fantasia", "pc");
$truco1 = new Truco("Truco1", "descripcion de truco1");
$juego->pintar();
$truco1->pintar();

$juego->addTruco($truco1);
echo"<br>";
$juego->pintar();
$juego->borrarTruco($truco1);
echo"<br>";
$juego->pintar();
