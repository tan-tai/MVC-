<?php
    require_once('Model/Database.php');
    $db = new Database;
    $db->connect();


    if(isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    }else{
        $controller = '';
    }

    switch($controller) {
        case 'user': {
            require_once('Controller/UserController.php');
            break;
        }
    }
?>