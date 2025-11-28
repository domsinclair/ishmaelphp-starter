<?php
declare(strict_types=1);

use Ishmael\Core\Router;

return function (Router $router): void {
    // Ishmael module convention: routes.php at the module root
    $controller = 'Modules\\Home\\Controllers\\HomeController';
    $router->get('/', $controller . '@index');
    $router->get('home/api', $controller . '@api');
};
