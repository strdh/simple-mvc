<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHP\MVC\App\Router;
use PHP\MVC\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');

Router::run();