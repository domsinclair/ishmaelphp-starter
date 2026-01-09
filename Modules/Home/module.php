<?php
declare(strict_types=1);

/**
 * Module manifest for the Home module.
 */
return [
    'name' => 'Home',
    'description' => 'Default landing page and API entry point.',
    'version' => '0.1.0',
    'enabled' => true,
    'env' => 'shared',
    'dependencies' => [],
    'routes' => __DIR__ . '/routes.php',
    'export' => ['Controllers', 'Views', 'routes.php'],
];
