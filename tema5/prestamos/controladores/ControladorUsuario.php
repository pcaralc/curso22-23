<?php
    class ControladorUsuario{

        public static function mostrarUsuarios(){
            //LLamar al modelo para obtener todas las películas en un array de Pelicula
            $usuarios = UsuarioBD::getUsuarios();

            //Llamar a una vista para pintar esas películas
            VistaUsuariosTodos::render($usuarios);
        }

        public static function mostrarUsuario($id){
            //LLamar al modelo para obtener el objeto de la pelicula con id $id
            $usuario = UsuarioBD::getUsuario($id);
            //$prestamos = CriticaBD::getCriticas($id);

            //Llamar a la vista para pintar la película en detalle
            VistaUsuarioDetalle::render($usuario);
        }

    }



?>