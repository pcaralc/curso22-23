<?php

    //FUNCIONES
    function pintarTambor() {

        echo "<div class='row'>";
        
        foreach($_SESSION['tambor'] as $num) {
            echo "<div class='col'>";
            echo "<span class='fs-6'>".$num."</span>";
            echo "</div>";
        }
        
        echo "</div>";

    }

    function pintarCarton($carton) {

        echo "<div class='row'>";
        
        foreach($carton as $num) {
            echo "<div class='col'>";
            echo "<span class='fs-6'>".$num."</span>";
            echo "</div>";
        }
        
        echo "</div>";

    }



    function generarCarton() {
        $carton = array();
        for($i=0; $i<15; $i++) {
            $numero = rand(1,99);
            
            while (in_array($numero, $carton )) {
                $numero = rand(1,99);
            }

            array_push($carton, $numero);
        }

        return $carton;
    }
    //FIN FUNCIONES -------------------------------------

?>