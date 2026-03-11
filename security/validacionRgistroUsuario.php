<?php
include_once "conexion.php";
$conexion_vR = conectionDB();

extract($_REQUEST);
//tabla usuarios
$nombre = $_REQUEST['nombreUsuario'];
$apellido = $_REQUEST['apellido'];
$numeroCedu = $_REQUEST ['numeroCedula'];
$fechaNaci = $_REQUEST ['FechaNacimiento'];
$fechaRegis = $_REQUEST ['fechaRegistro'];

//tabla rol
$rolu =$_REQUEST ['rol'];

//tabla credenciales
$email_cre= $_REQUEST['email'];
$contraseña_cre = $_REQUEST['contraseña'];

//contactos
$telefono_con = $_REQUEST['telefono'];
$email_con = $_REQUEST['email_contacto'];

//direccion
$direccion = $_REQUEST['direccion'];

$sql = $conexion_vR -> prepare("INSERT INTO usuarios (nombreUsuario,apellido, numeroCedula, fechaNacimiento,fechaRegistro, rol) VALUES (?,?,?,?,?,?)");

$sql -> bindParam(1,$nombre);
$sql -> bindParam(2,$apellido);
$sql -> bindParam(3,$numeroCedu);
$sql -> bindParam(4,$fechaNaci);
$sql -> bindParam(5,$fechaRegis);
$sql -> bindParam(6,$rolu);

$sql -> execute();

$rta = $sql -> rowCount();


 //  Obtener el último ID insertado
$idUsuario = $conexion_vR->lastInsertId();

    // INSERTAR EN ROL usando el idUsuario
$sql_r = $conexion_vR->prepare(
"INSERT INTO rol (idUsuario, rol) VALUES (?,?)");

$sql_r->bindParam(1, $idUsuario);
$sql_r->bindParam(2, $rolu);

$sql_r->execute();


$sql_cre = $conexion_vR -> prepare("INSERT INTO credenciales(email, contraseña) VALUES (?,?)");

$sql_cre -> bindParam(1,$email_cre);
$sql_cre -> bindParam(2,$contraseña_cre);

$sql_cre -> execute();

$sql_dir= $conexion_vR ->prepare("INSERT INTO direcciones (direcciones) VALUES (?)");

$sql_dir -> bindParam(1,$direccion);
$sql_dir -> execute();

// insertar contactos
$sql_contact= $conexion_vR ->prepare("INSERT INTO contactos (telefono, email) VALUES (?,?)");
$sql_contact -> bindParam(1,$telefono_con);
$sql_contact -> bindParam(2,$email_con);
$sql_contact -> execute();

// Verificar resultado y redirigir o mostrar mensaje
if ($rta) {
    header("Location: /views/home.php?msg=Usuario registrado");
    exit();
} else {
    echo " error al registrar usuario";
}