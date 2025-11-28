<?php
declare(strict_types=1);

namespace Modules\Home\Controllers;

use Ishmael\Core\Http\Response;

final class HomeController
{
    public function index(): Response
    {
        $body = <<<HTML
        <h1>Welcome to IshmaelPHP Starter</h1>
        <p>If you can see this page, your starter app is running.</p>
        <p>Try the JSON endpoint at <code>/home/api</code>.</p>
        HTML;
        return Response::html($body);
    }

    public function api(): Response
    {
        return Response::json([
            'ok' => true,
            'app' => (string) (config('app.name') ?? 'Ishmael Starter'),
            'env' => (string) (config('app.env') ?? 'local'),
        ]);
    }
}
