<?php
declare(strict_types=1);

return [
    'namespace' => 'rate',
    'jitter_ratio' => 0.2,
    'presets' => [
        'default' => [
            'capacity' => 60,
            'refillTokens' => 60,
            'refillInterval' => 60,
        ],
        'strict' => [
            'capacity' => 10,
            'refillTokens' => 10,
            'refillInterval' => 10,
        ],
        'bursty' => [
            'capacity' => 120,
            'refillTokens' => 60,
            'refillInterval' => 60,
        ],
    ],
];
