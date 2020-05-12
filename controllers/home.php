<?php

session_start();

class Home extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('view_home');
    }

    function logIn(){
        $email = $_POST['email'];
        $id    = $_POST['id'];

        $users = $this->model->consult($email, $id);

        if(count($users) === 1){
            $_SESSION['login_user'] = $users[0]->email;
            header("location: ".constant('URL')."event");   
        }else{
            $msg = "Usuario no registrado";
            echo $msg;
        }
    }
}