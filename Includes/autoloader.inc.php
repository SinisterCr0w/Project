<?php 
spl_autoload_register('autoLoader');

function autoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url,'Includes') !== false){
        $path = dirname(__DIR__,1)."Classes/";
    }
    elseif(strpos($url,'Views') !== false){
        $path = dirname(__DIR__,1)."Classes/";
    }
    else{
        $path = 'Classes/';
    }
    $ext = ".class.php";
    require_once $path . strtolower($className) . $ext;
}