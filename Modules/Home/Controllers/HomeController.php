<?php
declare(strict_types=1);

namespace Modules\Home\Controllers;

use Ishmael\Core\Controller;
use Ishmael\Core\Http\Response;

final class HomeController extends Controller
{
    public function index(): Response
    {
        return Response::html($this->view('welcome'));
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
