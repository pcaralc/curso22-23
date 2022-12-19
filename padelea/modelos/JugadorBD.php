<?php
    class JugadorBD {

        public static function comprobarLogin($email, $password, &$jugador) {
            $conexion = ConexionBD::conectar();
            
            $stmt = $conexion->prepare("SELECT * FROM jugadores WHERE email = ? AND password = ?");
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $password);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Jugador');
            $jugador = $stmt->fetch();

            $filas = $stmt->rowCount();

            //Si no me devuelve ninguna fila el password es incorrecto
            if ($filas == 0) {
                return 0;
            } else {
                //Usuario existe y password correcto 
                ConexionBD::cerrar();
                return 1;
            }
        }

        public static function getJugador($id) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM jugadores WHERE id = ?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Jugador');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $jugador = $stmt->fetch();

            ConexionBD::cerrar();

            return $jugador;
        }
        


    }

?>