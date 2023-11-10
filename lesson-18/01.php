<?php
// TODO: Implement the database logic here.

$db = new PDO('sqlite:tmdb.db');


$stmt = $db->prepare("SELECT * FROM directors");
$stmt->execute();

$director = $stmt->fetchAll();



?>


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>

<body>
    <h1>Directors</h1>
    <p>If you want to read more about a director, please click on their names below:</p>

    <!-- TODO: Implement the directors list logic here. -->

    <ul>
        <?php foreach ($director as $directo) : ?>
            <li>
                <a href="<?= $directo['tmdb_url'] ?>"><?= $directo['first_name'] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>