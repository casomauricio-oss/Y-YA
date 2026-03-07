<?php
include "./../view/RegistroUsuarios.php";

$var = new AuthController();

switch ($_REQUEST["X"]) {
    case '1': // Registro de usuario
        include("./../view/RegistroUsuarios.php");
        break;
    case '2': // Reporte
        # code ...
        break;
    default:
        # code ...
        break;
}
