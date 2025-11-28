<?php
declare(strict_types=1);

return [
    'defaults' => [
        'provider' => 'users',
    ],

    'providers' => [
        'users' => [
            'driver' => 'database',
            'table' => env('AUTH_USERS_TABLE', 'users'),
            'id_column' => env('AUTH_ID_COLUMN', 'id'),
            'username_column' => env('AUTH_USERNAME_COLUMN', 'email'),
            'password_column' => env('AUTH_PASSWORD_COLUMN', 'password'),
        ],
    ],

    'passwords' => [
        // bcrypt | argon2i | argon2id
        'algo' => env('AUTH_HASH_ALGO', 'bcrypt'),
        'cost' => (int) env('AUTH_BCRYPT_COST', 12),
        'memory_cost' => (int) env('AUTH_ARGON2_MEMORY', 1 << 17),
        'time_cost' => (int) env('AUTH_ARGON2_TIME', 4),
        'threads' => (int) env('AUTH_ARGON2_THREADS', 2),
    ],

    'redirects' => [
        'login' => env('AUTH_LOGIN_PATH', '/login'),
        'home' => env('AUTH_HOME_PATH', '/'),
    ],

    'policies' => [
        // 'App\\Models\\Post' => App\\Policies\\PostPolicy::class,
    ],

    'remember_me' => [
        'enabled' => (bool) env('AUTH_REMEMBER_ENABLED', true),
        'cookie' => env('AUTH_REMEMBER_COOKIE', 'ish_remember'),
        'ttl' => (int) env('AUTH_REMEMBER_TTL', 43200),
        'bind_user_agent' => (bool) env('AUTH_REMEMBER_BIND_UA', true),
        'path' => env('AUTH_REMEMBER_PATH', env('SESSION_PATH', '/')),
        'domain' => env('AUTH_REMEMBER_DOMAIN', env('SESSION_DOMAIN', '')),
        'secure' => (bool) env('AUTH_REMEMBER_SECURE', env('SESSION_SECURE', false)),
        'http_only' => (bool) env('AUTH_REMEMBER_HTTP_ONLY', env('SESSION_HTTP_ONLY', true)),
        'same_site' => env('AUTH_REMEMBER_SAME_SITE', env('SESSION_SAME_SITE', 'Lax')),
    ],
];
