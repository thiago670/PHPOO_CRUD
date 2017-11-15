<?php

require '../bootstrap.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controllers\comprasController;


$app = new App;
$app->get('/', comprasController::class.':index');
$app->run();
