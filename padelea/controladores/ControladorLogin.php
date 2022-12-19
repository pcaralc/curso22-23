<?php

    class ControladorLogin{

        public static function mostrarLogin(){
            VistaLogin::mostrarFormulario("");
        } 

        public static function comprobarLogin($email, $password){
            $jugador = null;
            $valido = JugadorBD::comprobarLogin($email, $password, $jugador);

            //Error login
            if ($valido == 0) {
                echo "<script>window.location='enrutador.php?accion=error';</script>";
            }

            //Login correcto
            if ($valido == 1) {
                $_SESSION['jugador'] = serialize($jugador);
                echo "<script>window.location='enrutador.php?accion=partidas';</script>";
            }
        }

        public static function mostrarLoginError(){
            VistaLogin::mostrarFormulario("Error al iniciar sesion, vuelve a intentarlo");
        } 
    }

?>