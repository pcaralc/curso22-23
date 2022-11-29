
<?php

class PrestamoBD {

    public static function getPrestamos() {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT prestamos.id, prestamos.fechaInicio, prestamos.fechaFin, prestamos.estado, usuarios.nombre, usuarios.apellidos, libros.titulo FROM prestamos join usuarios join libros WHERE prestamos.idUsuario = usuarios.id and prestamos.idLibro = libros.id");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prestamo');
        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $prestamo = $stmt->fetchAll();

        ConexionBD::cerrar();

        return $prestamo;
    }

    public static function getModificados($id, $fechaInicio, $fechaFin, $estado) {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("UPDATE prestamos SET prestamos.fechaInicio=?, prestamos.FechaFin=?, prestamos.estado=? WHERE prestamos.id = ?");
        $stmt->bindValue(1, $fechaInicio);
        $stmt->bindValue(2, $fechaFin);
        $stmt->bindValue(3, $estado);
        $stmt->bindValue(4, $id);
        $stmt->execute();

        ConexionBD::cerrar();
    }

    public static function insertarPrestamo($idUsuario, $idLibro, $fechaInicio, $fechaFin, $estado){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("INSERT INTO prestamos (idUsuario, idLibro, fechaInicio, fechaFin, estado) VALUES (?, ?, ?, ?, ?);");
        $stmt->bindValue(1, $idUsuario);
        $stmt->bindValue(2, $idLibro);
        $stmt->bindValue(3, $fechaInicio);
        $stmt->bindValue(4, $fechaFin);
        $stmt->bindValue(5, $estado);
        $stmt->execute();

        ConexionBD::cerrar();
    }

    public static function buscarEstado($estado){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT prestamos.id, prestamos.fechaInicio, prestamos.fechaFin, prestamos.estado, usuarios.nombre, usuarios.apellidos, libros.titulo FROM prestamos join usuarios join libros WHERE prestamos.idUsuario = usuarios.id and prestamos.idLibro = libros.id AND prestamos.estado = ?");
        $stmt->bindValue(1, $estado);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prestamo');
        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $prestamo = $stmt->fetchAll();
        ConexionBD::cerrar();

        return $prestamo;
    }

    public static function buscarDNI($dni){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT prestamos.id, prestamos.fechaInicio, prestamos.fechaFin, prestamos.estado, usuarios.nombre, usuarios.apellidos, libros.titulo FROM prestamos join usuarios join libros WHERE prestamos.idUsuario = usuarios.id and prestamos.idLibro = libros.id AND usuarios.dni = ?");
        $stmt->bindValue(1, $dni);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prestamo');
        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $prestamo = $stmt->fetchAll();
        ConexionBD::cerrar();

        return $prestamo;
    }



}

?>