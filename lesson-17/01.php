<?php


$db = new PDO('sqlite:startrek.db');

$statement = $db->query("SELECT * FROM actors WHERE id = 1;");

$actors = $statement->fetchAll();

var_dump($actors[0]['name']);

// foreach ($actors as $actor) {
//     echo $actor;
// }
