<?php
declare(strict_types=1);

return [
    'csrf' => [
        'enabled' => true,
        'field_name' => '_token',
        'header_names' => ['X-CSRF-Token', 'X-XSRF-Token'],
        'except_methods' => ['GET', 'HEAD', 'OPTIONS'],
        'except_uris' => [],
        'failure' => [
            'status' => 419,
            'message' => 'CSRF token mismatch.',
            'code' => 'csrf_mismatch',
        ],
        'rotate_on' => [],
    ],

    'headers' => [
        'enabled' => true,
        'x_frame_options' => env('SECURITY_XFO', 'SAMEORIGIN'),
        'x_content_type_options' => env('SECURITY_XCTO', 'nosniff'),
        'referrer_policy' => env('SECURITY_REFERRER_POLICY', 'no-referrer-when-downgrade'),
        'permissions_policy' => env('SECURITY_PERMISSIONS_POLICY', ''),
        'content_security_policy' => env('SECURITY_CSP', "default-src 'self'; frame-ancestors 'self'"),
        'hsts' => [
            'enabled' => (bool) env('SECURITY_HSTS', false),
            'only_https' => (bool) env('SECURITY_HSTS_ONLY_HTTPS', true),
            'max_age' => (int) env('SECURITY_HSTS_MAX_AGE', 15552000),
            'include_subdomains' => (bool) env('SECURITY_HSTS_INCLUDE_SUBDOMAINS', false),
            'preload' => (bool) env('SECURITY_HSTS_PRELOAD', false),
        ],
    ],
];
