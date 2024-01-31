<?php

require __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;
use App\Database\QueryBuilder;


use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$config = require __DIR__ . '/config.php';


return new QueryBuilder(Connection::make(
    $config['database']['driver'],
    $config['database']['host'],
    $config['database']['database'],
    $config['database']['username'],
    $config['database']['password'],

));
