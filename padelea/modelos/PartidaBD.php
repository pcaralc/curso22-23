<?php
class PartidaBD{
    public static function getPartidas(){
        $conexion = ConexionBD::conectar();
        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM partidas ORDER BY fecha ASC");
        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');

        ConexionBD::cerrar();

        return $partidas;
    }

    public static function getPartida($id) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM partidas WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');
        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $partida = $stmt->fetch();

        ConexionBD::cerrar();

        return $partida;
    }

    public static function insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto,$estado){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("INSERT INTO partidas (fecha, hora, ciudad, lugar, cubierto, estado) VALUES (?, ?, ?, ?, ?, ?);");
        $stmt->bindValue(1, $fecha);
        $stmt->bindValue(2, $hora);
        $stmt->bindValue(3, $ciudad);
        $stmt->bindValue(4, $lugar);
        $stmt->bindValue(5, $cubierto);
        $stmt->bindValue(6, $estado);
        $stmt->execute();


        return $conexion->lastInsertId(); 
    }

    public static function eliminarPartida($id) {
        $conexion = ConexionBD::conectar();

        $stmt = $conexion->prepare("DELETE FROM partidas WHERE id = :id");
        // Bind
        $stmt->bindValue(":id", $id);
        // Ejecuta la consulta
        $stmt->execute();

        ConexionBD::cerrar();
    }

    public static function buscarFecha($fecha){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM partidas WHERE fecha = ?");
        $stmt->bindValue(1, $fecha);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');
        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $partidas = $stmt->fetchAll();
        ConexionBD::cerrar();

        return $partidas;
    }
    public static function buscarCiudad($ciudad){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM partidas WHERE ciudad = ?");
        $stmt->bindValue(1, $ciudad);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');
        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $partidas = $stmt->fetchAll();
        ConexionBD::cerrar();

        return $partidas;
    }
}
?>