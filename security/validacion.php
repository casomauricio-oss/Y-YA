<?php

include_once "../security/conexion.php";
$conexion = conectionDB();
extract($_REQUEST);

$_usuario = $_REQUEST ['email'];
$pass = $_REQUEST ['contraseña'];

$sql = $conexion -> prepare("SELECT * FROM credenciales WHERE email=? AND contraseña=?");
$sql -> bindParam(1,$_usuario);
$sql -> bindParam(2,$pass);
$sql -> execute();

$rta = $sql -> fetchAll();


if ($rta) {
    $sqlU = $conexion -> prepare ("SELECT * FROM usuarios WHERE nombreUsuario=?");
    $sqlU -> bindParam(1,$_usuario);
    $sqlU -> execute ();

$rtaU = $sqlU -> fetchAll();

if ($rtaU) {
    foreach ($rtaU as $row) {
        echo 'Bienvenido'. $row ['nombreUsuario'] ."". $row ['apellido'];
    }
} else {
    echo "error credenciales";
}
} else{
    echo "error de conexion";
}