<?php

use Http\Controllers\HomeController;
use Core\Router;


$router = new Router();


$router->get("/", 'index.php');
$router->post("/email-list", 'email/store.php');
