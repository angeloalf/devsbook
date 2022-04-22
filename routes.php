<?php
global $routes;
$routes = array();

//create routes
$routes['/galeria/{alias}'] = '/galeria/abrir/:alias';

// routes for login
$routes['/entrar'] = '/login/signin';
$routes['/cadastro'] = '/login/signup';
