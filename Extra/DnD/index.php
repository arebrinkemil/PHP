<?php


// Include necessary files
require_once 'includes/config.php';
require_once 'functions/navigation.php';
require_once 'includes/rooms.php';
require_once 'functions/items.php';
require_once 'functions/combat.php';

if (isset($_POST['reset'])) {
    $_SESSION['gameState']['playerLocation'] = 'lobby'; // Reset to starting room
    $_SESSION['gameState']['inventory'] = [];
    $_SESSION['gameState']['playerHealth'] = 77;
    $_SESSION['listCommands'] = []; // Clear the inventory
    $_SESSION['listCommands'] = [];
    header("Location: index.php");  // Use PRG pattern here to avoid resubmission
    exit();
}

// Initialize the game state if not already initialized
if (!isset($_SESSION['gameState'])) {
    $_SESSION['gameState'] = [
        'playerLocation' => 'lobby',  // Starting room, can change based on your design
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
    $_SESSION['listCommands'][] = $command;

    if (isset($_SESSION['gameState']['pickupMode']) && $_SESSION['gameState']['pickupMode'] == true) {
        if ($command == "back") {
            unset($_SESSION['gameState']['pickupMode']);
        } else {
            lootItem($command);
            unset($_SESSION['gameState']['pickupMode']);
        }
    } else {
        // Check for attack command
        if (strpos($command, "attack") === 0) {
            // Get the enemy's name from the command
            $enemyName = trim(substr($command, 6)); // assuming a space after "attack"

            $currentRoom = $_SESSION['gameState']['playerLocation'];
            if (isset($rooms[$currentRoom]['enemies'][$enemyName])) {
                $_SESSION['listCommands'][] = engageCombat($enemyName);
            } else {
                echo "There's no enemy named $enemyName here.";
            }
        } else {
            // Process other commands
            switch ($command) {
                case 'north':
                case 'south':
                case 'east':
                case 'west':
                    $_SESSION['listCommands'][] = navigate($command);
                    break;
                case 'check':
                    $_SESSION['listCommands'][] = displayConnections();
                    break;
                case 'pickup':
                    $_SESSION['listCommands'][] = pickup();
                    break;
                case 'scan':
                    $_SESSION['listCommands'][] = scan();
                    break;
                default:
                    echo "command not recognized";
                    // Add error function here if needed
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
                <p class="game-output">
                    <?php if (!isset($_SESSION['outputMessage'])) {
                        echo $_SESSION['listCommands'][0];
                    }
                    ?>
                </p>

                <p class="game-output">
                <ul>
                    <?php foreach ($_SESSION['listCommands'] as $command) : ?>
                        <li><?php echo $command; ?></li>
                    <?php endforeach ?>
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



                <p class="game-inventory">Items in your inventory:
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