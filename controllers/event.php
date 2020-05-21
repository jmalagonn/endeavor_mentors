<?php

session_start();

class Event extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->msg = "";
    }

    function render(){
        $this->main();

        $this->view->render('view_event');
    }

    function main(){
        $user = $this->model->getUser($_SESSION['login_user']);
        
        $sessions = $this->model->getSessions($user);
        $this->view->sessions = $sessions;
        $this->view->user = $user;
    }

    function logOut(){
        unset($_SESSION['login_user']);
        header('location:'.constant('URL'));
    }

    function insert_nps(){
        $user = $this->model->getUser($_SESSION['login_user']);
        $msg = "";
        $res = false;

        $score   = $_POST['recomendation'];
        $opinion = $_POST['nps_opinion'];

        $data = [$user, $score, $opinion];

        $res = $this->model->insert_nps($data);

        if($res === true){
            $msg = "¡Muchas gracias por tu respuesta!";
    
            $this->view->msg = $msg;
            $this->render();
        }        
    }
}