<?php 

/** @var $router */

$router->get('', 'index.php')->only('auth');
$router->get('about', 'about.php');
$router->get('login', 'login.php')->only('auth');
// $router->get('/home', '/index.php');
// $router->get('/contact', '/about.php');
// $router->post('/create', '/hin.php');