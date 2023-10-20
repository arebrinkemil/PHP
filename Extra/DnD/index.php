<?php



require_once 'includes/config.php';
require_once 'functions/navigation.php';
require_once 'includes/rooms.php';
require_once 'functions/items.php';
require_once 'functions/combat.php';


// reset game
if (isset($_POST['reset'])) {
    $_SESSION['gameState']['playerLocation'] = 'lobby';
    $_SESSION['gameState']['inventory'] = [];
    $_SESSION['outputMessage'] = [];
    $_SESSION['gameState']['playerHealth'] = 77;
    $_SESSION['listCommands'] = ["", "", "", "", ""];

    header("Location: index.php");
    exit();
}


if (!isset($_SESSION['gameState'])) {
    $_SESSION['gameState'] = [
        'playerLocation' => 'lobby',  // start room
        'inventory' => [],
        'playerHealth' => 77,
    ];
}
if (isset($_SESSION['gameState']['playerHealth'])) {
    echo $_SESSION['gameState']['playerHealth'];
}

$outputMessage = [];
if (!isset($_SESSION['listCommands'])) {
    $_SESSION['listCommands'] = [];
}

if (!isset($_SESSION['outputMessage'])) {
    $_SESSION['outputMessage'] = [];
}

// Processing User Input
if (isset($_POST['command'])) {
    $command = strtolower(trim($_POST['command']));

    array_unshift($_SESSION['listCommands'], $command);

    if (isset($_SESSION['gameState']['pickupMode']) && $_SESSION['gameState']['pickupMode'] == true) {
        if ($command == "back") {
            unset($_SESSION['gameState']['pickupMode']);
        } else {
            lootItem($command);
            unset($_SESSION['gameState']['pickupMode']);
        }
    } else {

        if (strpos($command, "attack") === 0) {
            $enemyName = trim(substr($command, 6));

            $currentRoom = $_SESSION['gameState']['playerLocation'];
            if (isset($rooms[$currentRoom]['enemies'][$enemyName])) {
                $output = engageCombat($enemyName);
                $_SESSION['outputMessage'][] = $output;
            } else {
                $output = "There's no enemy named $enemyName here.";
                $_SESSION['outputMessage'][] = $output;
            }
        } else {

            switch ($command) {
                case 'north':
                case 'south':
                case 'east':
                case 'west':
                    $output = navigate($command);
                    $_SESSION['listCommands'][] = $command;
                    $_SESSION['outputMessage'][] = $output;
                    break;
                case 'check':
                    $output = displayConnections();
                    $_SESSION['listCommands'][] = $command;
                    $_SESSION['outputMessage'][] = $output;
                    break;

                case 'pickup':
                    $output = pickup();
                    $_SESSION['listCommands'][] = $command;
                    $_SESSION['outputMessage'][] = $output;
                    break;

                case 'scan':
                    $output = scan();
                    $_SESSION['listCommands'][] = $command;
                    $_SESSION['outputMessage'][] = $output;
                    break;
                default:
                    echo "command not recognized";
            }
        }
    }
}






$currentRoom = $_SESSION['gameState']['playerLocation'];

if (isset($rooms[$currentRoom]['background'])) {
    $backgroundImage = $rooms[$currentRoom]['background'];
}




// HTML Output
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text-Based Adventure Game</title>
    <link rel="stylesheet" href="assets/styles.css">
    <style>
        body {
            background-image: <?php echo $backgroundImage ?>;
            background-size: cover;
        }
    </style>
</head>

<body class="game-container">
    <div class="container">
        <div class="header">
            <h1 class="game-title">Text-Based Adventure Game</h1>
        </div>
        <div class="main-content">
            <div class="aside">
                <ul>
                    <h3>List of possible commands</h3>
                    <li>north,west,east & south</li>
                    <li>check</li>
                    <li>scan</li>
                    <li>pickup</li>
                    <li>attack</li>

                </ul>


                <p class="game-output">
                    <?php /*
<ul>
                    <?php foreach ($_SESSION['listCommands'] as $command) : ?>
                        <li><?php echo $command; ?></li>
                    <?php endforeach ?>
</ul>
*/ ?>
                <ul>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <li><?php echo $_SESSION['listCommands'][$i]; ?></li>

                    <?php } ?>
                </ul>
                </p>
            </div>

            <div class="article">
                <p class="game-description">
                    <?php
                    $currentRoom = $_SESSION['gameState']['playerLocation'];
                    echo $rooms[$currentRoom]['description'];
                    ?>
                </p>



                <div class="game-coms">
                    <?php
                    $reversedMessages = array_reverse($_SESSION['outputMessage']);
                    foreach ($reversedMessages as $index => $message) :
                    ?>
                        <div class='prompt' style='opacity: <?= (1 - $index * 0.2) ?>; transform: translateY(<?= $index * -30 ?>px);'><?= $message ?></div>
                    <?php endforeach; ?>
                </div>





                <p class="game-inventory">Inventory:
                    <?php echo empty($_SESSION['gameState']['inventory']) ? "None" : implode(', ', $_SESSION['gameState']['inventory']); ?>
                </p>
            </div>
        </div>
        <div class="footer">
            <form class="game-form" action="index.php" method="post">
                <input class="game-input" type="text" name="command" placeholder="Enter command (e.g., 'north')">
                <input class="game-command" type="submit" value="Submit">
                <input class="game-reset" type="submit" name="reset" value="Reset Position">
            </form>
        </div>

</body>

</html>