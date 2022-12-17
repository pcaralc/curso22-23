<?php
    class EnlaceBD {

        public static function getEnlaces($idRegalo){
            $conexion = ConexionBD::conectar();
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM enlaces WHERE idRegalo=?");
            $stmt->bindValue(1, $idRegalo);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $enlaces = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Enlace');

            ConexionBD::cerrar();

            return $enlaces;
        }

        public static function insertarEnlace($enlace){
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("INSERT INTO enlaces (nombre, web, precio, imagen, prioridad, idRegalo) VALUES (?, ?, ?, ?, ?, ?);");
            $stmt->bindValue(1, $enlace->getNombre());
            $stmt->bindValue(2, $enlace->getWeb());
            $stmt->bindValue(3, $enlace->getPrecio());
            $stmt->bindValue(4, $enlace->getImagen());
            $stmt->bindValue(5, $enlace->getPrioridad());
            $stmt->bindValue(6, $enlace->getIdRegalo());
            $stmt->execute();
    
            ConexionBD::cerrar();
        }

        public static function eliminarEnlace($id) {
            $conexion = ConexionBD::conectar();

            $stmt = $conexion->prepare("DELETE FROM enlaces WHERE id = :id");
            // Bind
            $stmt->bindValue(":id", $id);
            // Ejecuta la consulta
            $stmt->execute();

            ConexionBD::cerrar();
        }

        public static function ordenar($idRegalo){
            $conexion = ConexionBD::conectar();
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM enlaces WHERE idRegalo=? ORDER BY precio ");
            $stmt->bindValue(1, $idRegalo);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $enlaces = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Enlace');

            ConexionBD::cerrar();

            return $enlaces;
        }


    }

?>