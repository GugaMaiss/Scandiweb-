<?php

require_once __DIR__ . '/../core/Router.php';

use core\Router;

Router::get('/', function () {
    require_once __DIR__ . '/../pages/index.php';
});

Router::get('/add_product', function () {
    require_once __DIR__ . '/../pages/create.php';
});

Router::post('/add_product', function (){
    var_dump('Saved!');
});