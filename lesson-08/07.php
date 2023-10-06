<?php

$map = [
    [0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0],
    [0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0],
    [0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0],
    [0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1],
    [1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1],
    [0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        row {
            display: flex;

        }

        .box {
            width: 2rem;
            height: 2rem;
        }

        .white {
            background-color: white;
        }

        .black {
            background-color: black;
        }
    </style>

</head>

<body>

    <?php
    foreach ($map as $row) {
    ?>
        <row> <?php
                foreach ($row as $box) { ?>
                <div class="box <?php echo $box ? 'black' : 'white'; ?>"></div>
            <?php } ?>

        </row>

    <?php
    }
    ?>
</body>

</html>