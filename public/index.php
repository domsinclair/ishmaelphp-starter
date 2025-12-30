<?php
declare(strict_types=1);

// --------------------------------------------------
// IshmaelPHP Starter — Front Controller (Minimal)
// --------------------------------------------------

// 1) Composer autoload
require __DIR__ . '/../vendor/autoload.php';

// 2) Define app base so framework resolves paths relative to the application
if (!defined('ISH_APP_BASE')) {
    define('ISH_APP_BASE', realpath(__DIR__ . '/..'));
}

// 3) Bootstrap Ishmael Core (bootstrap-only = true)
if (!defined('ISH_BOOTSTRAP_ONLY')) {
    define('ISH_BOOTSTRAP_ONLY', true);
}
    require __DIR__ . '/../vendor/ishmael/framework/bootstrap/app.php';

// 4) Start the tiny Kernel and handle the request
use Ishmael\Core\App;
use Ishmael\Core\Http\Request;

$app = new App();
$app->boot();

// This ensures the application router sees paths relative to the project root, not the server root.
    $scriptPath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])); // e.g. /ish/public
    $basePath = dirname($scriptPath); // e.g. /ish

    if ($basePath !== '/' && $basePath !== '.') {
        if (str_starts_with($_SERVER['REQUEST_URI'], $basePath)) {
            $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($basePath));
        }
    }
// Ensure root is just slash
    if ($_SERVER['REQUEST_URI'] === '') {
        $_SERVER['REQUEST_URI'] = '/';
    }

$request = Request::fromGlobals();
$response = $app->handle($request);

// 5) Emit response
http_response_code($response->getStatusCode());
echo $response->getBody();

// 6) Terminate hook
$app->terminate($request, $response);
