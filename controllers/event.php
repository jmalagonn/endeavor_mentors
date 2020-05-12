<?php

session_start();

class Event extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->main();

        $this->view->render('view_event');
    }

    function main(){
        $user = $this->model->getUser($_SESSION['login_user']);
        
        $this->model->getSessions($user);
    }
}