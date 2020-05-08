<?php

class App{
    function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $archivocontroller = 'controllers/'.$url[0].'.php';

        if(empty($url[0])){
            $archivocontroller = 'controllers/home.php';
            require_once $archivocontroller;
            $controller = new Home();
            $controller->loadModel('home');
            $controller->render();
            return false;
        }else{
            require_once 'controllers/error.php';
            $controller = new Errors();
            $controller->render();
        }
    }
}