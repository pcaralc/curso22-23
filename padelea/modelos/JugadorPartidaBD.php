<?php
class JugadorPartidaBD{
    public static function insertarJugador($idPartida, $idJugador){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("INSERT INTO jugadoresPartidas (idPartida, idJugador) VALUES (?, ?);");
        $stmt->bindValue(1, $idPartida);
        $stmt->bindValue(2, $idJugador);
        $stmt->execute();

        ConexionBD::cerrar();
    }
}
?>