<?php 

require_once dirname(__DIR__) . '/core/constant.php';
require_once CORE . '/func.php';
require_once CLAS . '/Router.php';


$router = new Router;
require_once CORE . '/routers.php';
$router->match();