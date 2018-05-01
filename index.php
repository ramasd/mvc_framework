<?php
// FRONT CONTROLLER

// 1. Bendri nustatymai:
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Sistemos failų pajungimas:
define('ROOT', __DIR__); // Nustatom konstantos ROOT reikšmę lygia "C:\xampp\htdocs\parduotuve"
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

// 3. Sujungimas su DB:

// 4. Router iškvietimas:
$router = new Router();
$router->run();
?>