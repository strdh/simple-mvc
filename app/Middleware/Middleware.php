<?php

namespace PHP\MVC\Middleware;

interface Middleware 
{
    function before(): void;
}