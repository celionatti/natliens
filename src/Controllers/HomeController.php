<?php

declare(strict_types=1);

namespace Natliens\Controllers;

use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    public function __construct(private readonly Twig $twig) {}

    public function index(Request $request, Response $response, $args): Response
    {
        return $this->twig->render($response, 'index.twig');
    }

}