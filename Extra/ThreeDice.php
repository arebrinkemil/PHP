<?php

$Dice = [1, 2, 3, 4, 5, 6];
$userPoints = 0;
$computerPoints = 0;
$equalUser = false;
$stairUser = false;
$equalComputer = false;
$stairComputer = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userDice_a = array_rand($Dice, 1);
    $userDice_b = array_rand($Dice, 1);
    $userDice_c = array_rand($Dice, 1);

    $computerDice_a = array_rand($Dice, 1);
    $computerDice_b = array_rand($Dice, 1);
    $computerDice_c = array_rand($Dice, 1);

    $sumUser = $userDice_a + $userDice_b + $userDice_c;
    $sumComputer = $computerDice_a + $computerDice_b + $computerDice_c;

    if (($userDice_a == $userDice_b) && ($userDice_b == $userDice_c)) {
        $equalUser = true;
    }
    if (($computerDice_a == $computerDice_b) && ($computerDice_b == $computerDice_c)) {
        $equalComputer = true;
    }

    $userDices = [$userDice_a, $userDice_b, $userDice_c];
    sort($userDices, SORT_NUMERIC);
    $smallestUser = array_shift($userDices);
    $smallestUser_2 = array_shift($userDices);
    $smallestUser_3 = array_shift($userDices);
    if ((($smallestUser + 1) == $smallestUser_2) && (($smallestUser_2 + 1) == $smallestUser_3)) {
        $stairUser = true;
    }

    $computerDices = [$computerDice_a, $computerDice_b, $computerDice_c];
    sort($computerDices, SORT_NUMERIC);
    $smallestComputer = array_shift($computerDices);
    $smallestComputer_2 = array_shift($computerDices);
    $smallestComputer_3 = array_shift($computerDices);
    if ((($smallestComputer + 1) == $smallestComputer_2) && (($smallestComputer_2 + 1) == $smallestComputer_3)) {
        $stairComputer = true;
    }

    if ($sumUser >= 14) {
        $userPoints++;
    }
    if ($equalUser == true) {
        $userPoints += 2;
    }
    if ($stairUser == true) {
        $userPoints += 3;
    }

    if ($sumComputer >= 14) {
        $computerPoints++;
    }
    if ($equalComputer == true) {
        $computerPoints += 2;
    }
    if ($stairComputer == true) {
        $computerPoints += 3;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .textbox {
            font-size: 24px;
            padding: 10px;
            border: 2px solid #333;
            margin: 10px;
            display: inline-block;
        }

        .points {
            font-size: 36px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            <button type="submit">Roll Dice</button>
        </form>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
            <div class="textbox">Din tärning 1: <?php echo $userDice_a; ?></div>
            <div class="textbox">Din tärning 2: <?php echo $userDice_b; ?></div>
            <div class="textbox">Din tärning 3: <?php echo $userDice_c; ?></div>
            <div class="points">Dina poäng: <?php echo $userPoints; ?></div>
            <div class="textbox">Datorns tärning 1: <?php echo $computerDice_a; ?></div>
            <div class="textbox">Datorns tärning 2: <?php echo $computerDice_b; ?></div>
            <div class="textbox">Datorns tärning 3: <?php echo $computerDice_c; ?></div>
            <div class="points">Datorns poäng: <?php echo $computerPoints; ?></div>
        <?php endif; ?>
        <h1>
            <?php
            if ($userPoints > $computerPoints) {
                echo "Du vann!";
                # code...
            } elseif ($userPoints == $computerPoints) {
                echo "Lika";
                # code...
            } elseif ($userPoints < $computerPoints) {
                echo "Datorn vann!";
            };
            ?>
        </h1>


    </div>
</body>

</html>