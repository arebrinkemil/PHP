<?php

$actors = [
    [
        'name' => 'Jason Alexander',
        'character' => 'George Costanza',
        'tmdb_url' => 'https://www.themoviedb.org/person/1206-jason-alexander',
    ],
    [
        'name' => 'Jerry Seinfeld',
        'character' => 'Jerry Seinfeld',
        'tmdb_url' => 'https://www.themoviedb.org/person/16377-jerry-seinfeld',
    ],
    [
        'name' => 'Julia Louis-Dreyfus',
        'character' => 'Elaine Benes',
        'tmdb_url' => 'https://www.themoviedb.org/person/15886-julia-louis-dreyfus',
    ],
    [
        'name' => 'Michael Richards',
        'character' => 'Cosmo Kramer',
        'tmdb_url' => 'https://www.themoviedb.org/person/50807-michael-richards',
    ],
];


echo $actors[2]['name'];

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

        <?php
        foreach ($actors as $actor) { ?>
            <li>

                <a href="<?php echo $actor['tmdb_url']; ?>"><?php echo $actor['name']; ?></a> -
                <?php echo $actor['character']; ?>

            </li>

        <?php } ?>


    </ul>


</body>

</html>