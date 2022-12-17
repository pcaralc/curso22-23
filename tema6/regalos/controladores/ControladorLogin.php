<?php

    class ControladorLogin{

        public static function mostrarLogin(){
            VistaLogin::mostrarFormulario("");
        } 

        public static function comprobarLogin($email, $password){
            $usuario = null;
            $valido = UsuarioBD::comprobarLogin($email, $password, $usuario);

            //Error login
            if ($valido == 0) {
                echo "<script>window.location='enrutador.php?accion=error';</script>";
            }

            //Login correcto
            if ($valido == 1) {
                $_SESSION['usuario'] = serialize($usuario);
                echo "<script>window.location='enrutador.php?accion=regalos';</script>";
            }
        }

        public static function mostrarLoginError(){
            VistaLogin::mostrarFormulario("Error al iniciar sesion, vuelve a intentarlo");
        } 
    }

?>