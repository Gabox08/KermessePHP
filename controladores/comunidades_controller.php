<?php
include_once '../negocio/user_session.php';

class comunidades_controller{

    public function indexComunidades(){
        $userSession = new user_session();
        if(isset($_SESSION['user'])) {
            include_once '../views/headerSO.php';
            require_once '../views/comunidades.php';
        }else{
            include_once '../views/headerSC.php';
            require_once '../views/comunidades.php';
        }
    }
}