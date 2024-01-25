<?php

require __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;
use App\Database\QueryBuilder;

$config = require __DIR__ . '/config.php';


return new QueryBuilder(Connection::make(
    $config['database']['driver'],
    $config['database']['host'],
    $config['database']['database'],
    $config['database']['username'],
    $config['database']['password'],

));
