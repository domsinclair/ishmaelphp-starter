<?php
    declare(strict_types=1);

// Normalize the SQLite path: if DB_DATABASE is relative, prefix base_path()
    $__envDb = env('DB_DATABASE');
    $__sqlitePath = $__envDb
        ? (preg_match('~^(?:[A-Za-z]:\\\\|\\\\\\\\|/)~', $__envDb) ? $__envDb : base_path($__envDb))
        : base_path('storage/ishmael.sqlite');

    return [
        'default' => env('DB_CONNECTION', 'sqlite'),

        'connections' => [
            'sqlite' => [
                'driver'   => 'sqlite',
                'database' => $__sqlitePath,
            ],

            'mysql' => [
                'driver'   => 'mysql',
                'host'     => env('DB_HOST', '127.0.0.1'),
                'port'     => env('DB_PORT', 3306),
                'database' => env('DB_DATABASE', 'ishmael'),
                'username' => env('DB_USERNAME', 'root'),
                'password' => env('DB_PASSWORD', ''),
                'charset'  => 'utf8mb4',
                'collation'=> 'utf8mb4_unicode_ci',
            ],

            'pgsql' => [
                'driver'   => 'pgsql',
                'host'     => env('DB_HOST', '127.0.0.1'),
                'port'     => env('DB_PORT', 5432),
                'database' => env('DB_DATABASE', 'ishmael'),
                'username' => env('DB_USERNAME', 'postgres'),
                'password' => env('DB_PASSWORD', ''),
                'charset'  => 'utf8',
            ],
        ],
    ];