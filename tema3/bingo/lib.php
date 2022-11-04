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

    function pintarCarton($carton,$i) {

        echo "<div class='row'>";
        $contador=0;

        //poner numero sacado pintado
        foreach($carton as $num) {
            echo "<div class='col'>";
            if (in_array($num, $_SESSION['salidos'])) {
                echo "<span class='fs-6 bg-info'>".$num."</span>";

                //contamos todos los numeros que se van acertando, si llegamos a 15 números el bingo es acertado
                $contador++;
                if($contador==15){
                   bingoAcertado($i);
                }
            } else {
                echo "
                <span class='fs-6'>".$num."</span>";
            }
            
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

    function pintarFormularioJugadores() {
        echo "<form action='controlador.php' method='post'>";

        for($i=0; $i<$_SESSION['numJugadores'];$i++) {
            echo "
            <head>    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'></head>
            
            <div class='row justify-content-center '>

                <div class='col-3'>
                        <label for='nick".$i."' class='col-sm-2 col-form-label'>Nick</label>
                        <input type='text' class='form-control' name='nick".$i."'>
                        <label for='saldo".$i."' class='form-label'>Saldo</label>
                        <input type='number' class='form-control' name='saldo".$i."' min='10' max='100'>
                </div>
            </div>";
                    
        }

        echo "<br><div class='row m-0 text-center align-items-center justify-content-center'>
            <div class='col-auto'>
                <button type='submit' name='empezar' class='btn btn-primary'>Enviar</button>
            </div>
        </div>";

        echo "</form>";
    }


    function bingoAcertado($i){
        echo "
    <div class='row '>
        <div class='col-auto'>
                <h5> HA GANADO ".valorBingo()."€</h5>";
                echo "<h5>Saldo: " .$_SESSION['jugador' . $i][1]+valorBingo()."€</h5>";
                $_SESSION['jugador'.$i][1]=$_SESSION['jugador' . $i][1]+valorBingo();
                echo "
                <form action='controlador.php' method='get'>
                    <button type='submit' name='iniciar' class='btn btn-danger'>Salir</button><br>
                    <button type='submit' name='otra' class='btn btn-warning'>Otra ronda</button>
                </form>
        </div>
    </div>";

    }


    function valorBingo(){
        return $_SESSION['numJugadores']*5;
    }

    //FIN FUNCIONES -------------------------------------

?>