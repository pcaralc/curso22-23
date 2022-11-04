<?php

    $dsn=null;

    try{
        $dsn = "mysql:host=mariadb;dbname=ejemplo";
        $dbh = new PDO($dsn, "usuario", "usuario");

    }catch(PDOException $e){
        echo $e->getMessage();
    }


    $stmt = $dbh->prepare("SELECT * FROM clientes");
    $stmt->execute();
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($clientes as $cliente){
        echo $cliente['nombre'] . "<br>";
    }
?>