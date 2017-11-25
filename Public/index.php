<?php

require '../bootstrap.php';


use Slim\App;
use App\Controllers\comprasController;


$app = new App;
$app->get('/',comprasController::Class.':index');
$app->get('/compras',comprasController::Class.':index');
$app->get('/compras/adicionar',comprasController::Class.':adicionar');
$app->post('/compras',comprasController::Class.':salvar');


$app->run();

