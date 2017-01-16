<?php

$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root);
$dotenv->load();

// Craft
define('CRAFT_BASE_PATH', $root);
$app = require $root.'/vendor/craftcms/cms/bootstrap/web.php';
$app->run();
