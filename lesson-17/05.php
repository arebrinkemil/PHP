<?php
$db = new PDO('sqlite:startrek.db');

$statement = $db->query("SELECT actors.name, CHARACTERS.name AS character_name 
from actors
INNER join CHARACTERS on actors.id = CHARACTERS.actor_id
order BY characters.name desc
limit 5;
");

$actors = $statement->fetchAll();





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>

<body>
    <ol>
        <?php foreach ($actors as $actor) : ?>
            <li>
                <?= $actor['name'] ?> is portrayed by <?= $actor['character_name'] ?>
            </li>
        <?php endforeach ?>
    </ol>
</body>

</html>