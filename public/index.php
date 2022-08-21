<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHP\MVC\App\Router;
use PHP\MVC\Controller\HomeController;
use PHP\MVC\Controller\ProductController;
use PHP\MVC\Middleware\AuthMiddleware;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);

Router::run();