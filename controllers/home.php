<?php

class Home extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('view_home');
    }

    function logIn(){
        $email = $_POST['email'];
    }
}