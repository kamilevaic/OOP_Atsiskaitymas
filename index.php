<?php

use Kamil\Oop\Container\DIContainer;
use Kamil\Oop\Framework\Router;

require_once './vendor/autoload.php';

// Load custom DI container
$container = new DIContainer();
$container->loadDependencies();

// Use custom Router
////echo '<pre>';
//var_dump($_SERVER['REQUEST_URI']);
//die();


$requestUri = str_replace('/OOPatsiskaitymas', "", $_SERVER['REQUEST_URI'], );
//echo var_dump($requestUri);
//die();

$router = $container->get(Router::class);
$router->process($requestUri);




