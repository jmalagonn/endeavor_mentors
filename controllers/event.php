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
        
        $sessions = $this->model->getSessions($user);
        $this->view->sessions = $sessions;
        $this->view->user = $user;
    }
}