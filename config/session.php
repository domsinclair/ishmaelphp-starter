<?php
declare(strict_types=1);

return [
    'driver'    => env('SESSION_DRIVER', 'file'),
    'lifetime'  => (int) env('SESSION_LIFETIME', 120),
    'cookie'    => env('SESSION_COOKIE', 'ish_session'),
    'path'      => env('SESSION_PATH', '/'),
    'domain'    => env('SESSION_DOMAIN', ''),
    'secure'    => (bool) env('SESSION_SECURE', false),
    'http_only' => (bool) env('SESSION_HTTP_ONLY', true),
    'same_site' => env('SESSION_SAME_SITE', 'Lax'),
    'files'     => storage_path('sessions'),
];
