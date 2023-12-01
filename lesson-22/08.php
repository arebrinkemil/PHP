<?php

declare(strict_types=1);

$characters = [
    'Arya Stark',
    'Bran Stark',
    'Cersei Lannister',
    'Daenerys Targaryen',
    'Davos Seaworth',
    'Jaime Lannister',
    'Jon Snow',
    'Jorah Mormont',
    'Sansa Stark',
    'Theon Greyjoy',
    'Tyrion Lannister',
];

function callback($n)
{
    $nameParts = explode(' ', $n);
    $lastName = $nameParts[1];
    return $lastName;
}

$lastnames = array_map('callback', $characters);
sort($lastnames);

$lastnames = array_unique($lastnames);
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
        <?php foreach ($lastnames as $lastname) : ?>
            <li><?= $lastname ?></li>
        <?php endforeach; ?>

    </ul>

</body>

</html>