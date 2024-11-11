<?php

require_once "vendor/autoload.php";

use AdaiasMagdiel\Hermes\Router;

use App\Controllers\Controller;
use App\Controllers\Site;
use App\Controllers\Api;

Controller::init();

Router::initialize();

Router::get('/', [Site::class, "index"]);
Router::get('/api/latest', [Api::class, "latest"]);

Router::execute();
