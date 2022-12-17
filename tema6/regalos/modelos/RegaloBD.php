<?php
    class RegaloBD{
        public static function getRegalos($id){
            $conexion = ConexionBD::conectar();
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM regalos WHERE idUsuario=?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalo');

            ConexionBD::cerrar();

            return $regalos;
        }
        public static function getRegalo($id) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM regalos WHERE id = ?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalo');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $regalo = $stmt->fetch();

            ConexionBD::cerrar();

            return $regalo;
        }

        public static function eliminarRegalo($id) {
            $conexion = ConexionBD::conectar();

            $stmt = $conexion->prepare("DELETE FROM regalos WHERE id = :id");
            // Bind
            $stmt->bindValue(":id", $id);
            // Ejecuta la consulta
            $stmt->execute();

            ConexionBD::cerrar();
        }

        public static function getModificados($id, $nombre, $destinatario, $precio, $estado, $year) {
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("UPDATE regalos SET regalos.nombre=?, regalos.destinatario=?, regalos.precio=?, regalos.estado=?, regalos.year=? WHERE regalos.id = ?");
            $stmt->bindValue(1, $nombre);
            $stmt->bindValue(2, $destinatario);
            $stmt->bindValue(3, $precio);
            $stmt->bindValue(4, $estado);
            $stmt->bindValue(5, $year);
            $stmt->bindValue(6, $id);
            $stmt->execute();
    
            ConexionBD::cerrar();
        }

        public static function insertarRegalo($idUsuario, $nombre, $destinatario, $precio, $estado, $year){
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("INSERT INTO regalos (idUsuario, nombre, destinatario, precio, estado, year) VALUES (?, ?, ?, ?, ?, ?);");
            $stmt->bindValue(1, $idUsuario);
            $stmt->bindValue(2, $nombre);
            $stmt->bindValue(3, $destinatario);
            $stmt->bindValue(4, $precio);
            $stmt->bindValue(5, $estado);
            $stmt->bindValue(6, $year);
            $stmt->execute();
    
            ConexionBD::cerrar();
        }

        public static function buscarYear($yea){
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT regalos.id, regalos.nombre, regalos.destinatario, regalos.precio, regalos.estado, regalos.year FROM regalos WHERE regalos.year = ?");
            $stmt->bindValue(1, $yea);
            $stmt->execute();
    
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalo');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $regalos = $stmt->fetchAll();
            ConexionBD::cerrar();
    
            return $regalos;
        }

    }

?>