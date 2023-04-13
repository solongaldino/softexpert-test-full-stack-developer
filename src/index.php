<?php

namespace Softexpert\Api;

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
require_once 'config/autoload-class.php';

use Shared\Utils\Router;

$modules = ["products", "taxes"];

$router = new Router($modules);
$router->run();