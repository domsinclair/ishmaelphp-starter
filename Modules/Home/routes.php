<?php
declare(strict_types=1);

use Ishmael\Core\Router;

    return function (Router $router): void {
        $router->get('/', 'HomeController@index');
        $router->get('home/api', 'HomeController@api');
    };
