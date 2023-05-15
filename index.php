<?php

declare(strict_types=1);

use App\App;
use App\Config\Configuration;

session_start();

require_once("vendor/autoload.php");
const BASE_PATH = __DIR__;

$env_required = ["APP_HOST", "DB_DRIVER", "DB_HOST", "DB_USER", "DB_PASSWORD", "DB_NAME"];

try {
    Configuration::initiate(BASE_PATH, $env_required);

    $app = new App();
    $app->run();
}catch (\Exception $e){
    echo $e;
}