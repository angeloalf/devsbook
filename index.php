<?php
session_start();
require 'config.php';
require 'routes.php';

// autoload do composer
require 'vendor/autoload.php';

spl_autoload_register(function($class) {
    if (file_exists('controllers/'.$class.'.php')) {
       require 'controllers/'.$class.'.php'; 
    } elseif (file_exists('models/'.$class.'.php')) {
        require 'models/'.$class.'.php';
    } //elseif (file_exists('core/'.$class.'.php')) {
        //require 'core/'.$class.'.php';
    //}  
});


use core\Core;
$core = new Core();
$core->run();




