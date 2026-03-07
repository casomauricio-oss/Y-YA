<?php
include "./../view/RegistroUsuarios.php";

$var = new UserController();

switch ($_REQUEST["X"]) {
    case '1': // Registro de usuario
        $var->registroUsuario();
        break;
    case '2': // Reporte
        # code ...
        break;
    default:
        # code ...
        break;
}
