<?php session_start(); ?>
<?php include('lib.php'); ?>
<?php


    if ($_POST) {

        if (isset($_POST['enviar'])) {
            //Iniciar variables de sesión
            $_SESSION['numeroJugadores'] = $_POST['numeroJugadores'];
            $_SESSION['tambor'] = array();
            for($i=1; $i<100; $i++) {
                array_push($_SESSION['tambor'],$i);
            }

        //    for($i=0; $i < $_SESSION['numJugadores']; $i++) {
        //          $valor = 'carton'.$i;
        //         $_SESSION[$valor] = generarCarton();
        //      }

            header("Location: empezarJuego.php");

        }

        if (isset($_POST['empezar'])) {
            $_SESSION['jugadores']= array();
            
            for($i=0; $i<$_SESSION['numeroJugadores']-1;$i++){
                $valor = 'carton'.$i;
                $_SESSION[$valor] = generarCarton();

                $tr="nick".$i;
                $sd="saldo".$i;

                $jugador = array($tr => $_POST[''], $sd => $_POST['']);
                array_push($_SESSION['jugadores'],$jugador);
            }

            header("Location:juego.php");

        }

    }




?>