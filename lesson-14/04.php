<?php

$actors = [
    'Alecia Svensen',
    'Andrew Garfield',
    'Bryan Barter',
    'Dustin Fitzsimons',
    'Jesse Eisenberg',
    'Joseph Mazzello',
    'Justin Timberlake',
    'Patrick Mapel',
    'Rooney Mara',
    'Toby Meuli',
];


if (isset($_GET['direction'])) {
    $direction = $_GET['direction'];
}


if ($direction == "asc") {
    sort($actors);
} else if ($direction == "desc") {
    rsort($actors);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
    <style>
        body {
            font-family: Helvetica;
        }
    </style>
</head>

<body>
    <p><a href="?direction=asc">ASC</a> | <a href="?direction=desc">DESC</a></p>
    <ul>
        <?php foreach ($actors as $actor) : ?>
            <li><?php echo $actor; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>