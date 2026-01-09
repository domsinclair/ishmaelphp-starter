<?php
    declare(strict_types=1);

    use Ishmael\Core\Router;

    use Modules\Home\Controllers\HomeController;

    return function (Router $router): void {
        $router->get('/', [HomeController::class, 'index']);
        $router->get('home/api', [HomeController::class, 'api']);
    };
