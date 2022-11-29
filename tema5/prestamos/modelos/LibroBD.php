<?php

    class LibroBD {

        public static function getLibros() {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM libros");

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $libros = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Libro');

            ConexionBD::cerrar();

            return $libros;
        }

        public static function getLibro($id) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM libros WHERE id = ?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Libro');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $libro = $stmt->fetch();

            ConexionBD::cerrar();

            return $libro;
        }




    }

?>