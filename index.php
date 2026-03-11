<?php
include_once './controllers/authController.php';
// Controlador de autenticacion 
if (isset($_POST['login'])) {
    $auth = new AuthController();
    $auth -> login($_POST['username'],$_POST['password']);
} else {
    header("Location: ./views/login.php");
}