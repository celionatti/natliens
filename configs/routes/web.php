<?php

declare(strict_types=1);

use Natliens\Controllers\HomeController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);
};