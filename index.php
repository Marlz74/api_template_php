<?php

use App\Libraries\Core;
use App\Libraries\EnvLoader;
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/vendor/autoload.php';

header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');


EnvLoader::load(__DIR__ . '/.env');

new Core();






