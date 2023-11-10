<?php
$db = new PDO('sqlite:startrek.db');

$statement = $db->query("SELECT * FROM actors");

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
                <?= $actor['name'] ?>
            </li>
        <?php endforeach ?>
    </ol>
</body>

</html>