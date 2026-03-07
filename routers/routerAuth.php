<?php
    include "./../controllers/authController.php";

    extract($_REQUEST);

    switch ($_REQUEST['login']){
        case 'login': // registro
            $auth = new AuthController();
            $auth->login($_POST['username'], $_POST['password']);
            break;
        case 'logout': // logout
            $auth = new AuthController();
            $auth->logout();
            break;
        default:
            # code ...
            break;
    }
?>