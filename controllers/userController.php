<?php 
$x = $_REQUEST['X'];

class AutController{
    public function formUser(){
        $contenido = "./views/registroUsuarios.php";
        require "./views/home.php";
    }
}

?>