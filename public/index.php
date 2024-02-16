<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\DashboardController;

$router = new Router();


// Dashboard
$router->get('/', [DashboardController::class, 'index']);

$router->comprobarRutas();