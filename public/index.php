<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHP\MVC\App\Router;

Router::add('GET', '/', 'App\Controllers\HomeController', 'index');

Router::run();