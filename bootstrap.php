<?php

// FRONT CONTROLLER

// 1. Settings

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Include system files

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/app/core/Router.php');

// 3. DB connection

require_once(ROOT . '/app/core/Db.php');

// 4. Call Router

$router = new Router();
$router->run();