<?php
function conectionDB(){
    try {
        $conn = new PDO("mysql:host=localhost;dbname=basedatos_yaya", "root", "");
        return $conn;
    } catch (PDOException $e) {
        echo "Error de conexión a la base de datos.";
        return null;
    }
}

/**
$host = "localhost";
$db = "basedatos_yaya";
$user = "root";
$pass = "";
$charset = "utf8mb4";
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$conexion = new PDO($dsn, $user, $pass);
 */