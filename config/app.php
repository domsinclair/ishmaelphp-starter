<?php
declare(strict_types=1);

return [
    'name'  => env('APP_NAME', 'Ishmael Starter'),
    'env'   => env('APP_ENV', 'local'),
    'debug' => (bool) env('APP_DEBUG', true),
    'url'   => env('APP_URL', 'http://localhost:8080'),

    'routing' => [
        'herd_base' => env('ROUTING_HERD_BASE', true),
    ],

    // Default landing module/controller/action
    'default_module'     => 'Home',
    'default_controller' => 'Home',
    'default_action'     => 'index',

    'timezone' => env('TIMEZONE', 'UTC'),
    'locale'   => env('APP_LOCALE', 'en'),

    'paths' => [
        'modules' => base_path('Modules'),
        'storage' => base_path('storage'),
        'logs'    => base_path('storage/logs'),
        'cache'   => base_path('storage/cache'),
    ],

    'http' => [
        'middleware' => [
            Ishmael\Core\Http\Middleware\StartSessionMiddleware::class,
            Ishmael\Core\Http\Middleware\VerifyCsrfToken::class,
            // Enable security headers by installing/configuring the security module/middleware
            // Ishmael\Core\Http\Middleware\SecurityHeaders::class,
        ],
    ],
];
