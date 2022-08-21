<?php

namespace PHP\MVC\Controller;
use PHP\MVC\App\View;

class HomeController
{
    public function index() : void
    {
        $model = [
            "title" => "Learn About PHP MVC",
            "description" => "Learning PHP advance best pratice",
        ];

        // require __DIR__ . '/../View/Home/index.php';
        View::render('Home/index', $model);
    }

    public function hello() : void 
    {
        echo "this is HomeController::hello()";
    }
}