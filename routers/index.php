<?php


require_once 'routers/router.php';

use router\Router;

$router = new Router();

$router->add('GET', '/', 'HomeController@index');
$router->add('GET', '', 'HomeController@index');
$router->add('GET', '/index.php', 'HomeController@index');



$router->solve();