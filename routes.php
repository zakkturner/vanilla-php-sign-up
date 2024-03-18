<?php

use Http\Controllers\HomeController;
use Core\Router;


$router = new Router();


$router->get("/", 'index.php');
