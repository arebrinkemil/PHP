<?php

$file = file_get_contents(__DIR__ . '/girls.json');

$girls = json_decode($file, true);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($girls['actors'] as $girl) : ?>
            <li>
                <h1><?php echo "The character " . $girl['character'] . "is portrayed by " . $girl['name'] ?></h1>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>