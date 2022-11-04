<?php session_start(); ?>
<?php include('lib.php'); ?>
<?php

    if($_GET){
        if(isset($_GET['iniciar'])){
            session_destroy();
            header("Location: index.php");

        }elseif(isset($_GET['volver'])){
            header("Location:index.php?accion=jugar");

        }elseif(isset($_GET['otra'])){
            $_SESSION['salidos'] = array();
            $_SESSION['tambor'] = array();
            for($i=1; $i<100; $i++) {
                array_push($_SESSION['tambor'],$i);
            }

            for($i=0; $i < $_SESSION['numJugadores']; $i++) {
                $valor = 'carton'.$i;
                $_SESSION[$valor] = generarCarton();
                $_SESSION['jugador'.$i] = $_SESSION['jugador'.$i];
                
                //Quitamos los 5 Euros que cuesta el carton
                $_SESSION['jugador'.$i][1]=($_SESSION['jugador'.$i][1])-5;
            }

            header("Location: index.php?accion=inicio");

        }
    }



    if ($_POST) {

        if (isset($_POST['empezar'])) {
            //Iniciar variables de sesión
            
            $_SESSION['salidos'] = array();
            $_SESSION['tambor'] = array();
            for($i=1; $i<100; $i++) {
                array_push($_SESSION['tambor'],$i);
            }

            for($i=0; $i < $_SESSION['numJugadores']; $i++) {
                $valor = 'carton'.$i;
                $_SESSION[$valor] = generarCarton();
                $_SESSION['jugador'.$i] = array($_POST['nick'.$i], $_POST['saldo'.$i]);
                
                //Quitamos los 5 Euros que cuesta el carton
                $_SESSION['jugador'.$i][1]=($_SESSION['jugador'.$i][1])-5;
            }

            header("Location: index.php?accion=inicio");

        } elseif (isset($_POST['generarJugadores'])) {
                $_SESSION['numJugadores'] = $_POST['numeroJugadores'];
                pintarFormularioJugadores();
        } else {
            //Código que saca una bola del tambor y comprueba en los
            //boletos de los jugadores si está o no
            if (isset($_POST['sacarBola'])) {
                $posicion = rand(0,count($_SESSION['tambor'])-1); //Números del 1 al 99

                //Metemos en los valores que han salido

                array_push($_SESSION['salidos'], $_SESSION['tambor'][$posicion]);
                

                //Quitamos del tambor el que ha salido
                unset($_SESSION['tambor'][$posicion]);
                $_SESSION['tambor'] = array_values($_SESSION['tambor']);

                

                //Redirijo a index.php
                header("Location: index.php?accion=jugar");

             } 
        }

    }




?>