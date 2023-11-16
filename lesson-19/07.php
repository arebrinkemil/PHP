<?php

declare(strict_types=1);

$database = new PDO('sqlite:actors.db');

$statement = $database->query('SELECT * FROM actors');

$actors = $statement->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');

echo json_encode($actors);
