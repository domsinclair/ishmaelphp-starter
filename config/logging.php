<?php
declare(strict_types=1);

// Adapted from Core defaults to keep discoverability in the Starter

$testMode = (($_SERVER['ISH_TESTING'] ?? null) === '1');
$psrPath = $testMode
    ? (sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'ish_logs_tests' . DIRECTORY_SEPARATOR . 'app.psr.log')
    : (defined('storage_path') ? storage_path('logs/ishmael.log') : (getenv('ISH_APP_BASE') ?: __DIR__ . '/../..') . '/storage/logs/ishmael.log');

return [
    'default' => env('LOG_CHANNEL', 'stack'),

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
        ],

        'single' => [
            'driver' => 'single',
            'path'   => $psrPath,
            'level'  => env('LOG_LEVEL', 'debug'),
            'format' => 'json',
        ],

        'daily' => [
            'driver' => 'daily',
            'path'   => $psrPath,
            'days'   => 7,
            'level'  => env('LOG_LEVEL', 'info'),
        ],

        'monolog' => [
            'driver' => 'monolog',
            'handler' => env('MONOLOG_HANDLER', 'stream'),
            'path' => $psrPath,
            'days' => 7,
            'ident' => env('MONOLOG_SYSLOG_IDENT', 'ishmael'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],
    ],
];
