<?php

namespace PHP\MVC\Controller;

class HomeController
{
    public function index() : void
    {
        echo "This is HomeController::index()";
    }

    public function hello() : void 
    {
        echo "this is HomeController::hello()";
    }
}