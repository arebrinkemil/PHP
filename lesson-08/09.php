<?php
$stars = [
    ['color' => 'aqua', 'size' => 2],
    ['color' => 'aquamarin', 'size' => 3],
    ['color' => 'hotpink', 'size' => 1],
    ['color' => 'white', 'size' => 2],
    ['color' => 'yellow', 'size' => 1],
];

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
    <style>
        body {
            background-color: #111;
            overflow: hidden;

        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        div {
            animation: fade-in 1s;
            position: relative;
        }


        row {
            display: flex;

        }

        .box {
            width: 2rem;
            height: 2rem;
        }

        .white {
            background-color: none;
        }

        .black {
            background-color: white;
        }

        #pot {
            bottom: 33%;
            position: absolute;
            -webkit-animation: linear infinite;
            -webkit-animation-name: run;
            -webkit-animation-duration: 3s;
        }

        @-webkit-keyframes run {
            0% {
                left: 0;
            }

            50% {
                left: 100%;
            }

            100% {
                left: 0;
            }
        }
    </style>
</head>

<body>
    <?php
    for ($i = 0; $i < 456; $i++) {
        $star = $stars[array_rand($stars)];
        $top = rand(0, 1000);
        $left = rand(0, 1900)
    ?>
        <div style="top: <?php echo $top; ?>px; left: <?php echo $left; ?>px; background-color: <?php echo $star['color']; ?>; width: <?php echo $star['size']; ?>px; height: <?php echo $star['size']; ?>px">

        </div>
    <?php }
    ?>

    <section id="pot">

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

    </section>
</body>

</html>