<?php



// Include necessary files
require_once 'includes/config.php';
require_once 'functions/navigation.php';
require_once 'includes/rooms.php';
require_once 'functions/items.php';


// Initialize the game state if not already initialized
if (!isset($_SESSION['gameState'])) {
    $_SESSION['gameState'] = [
        'playerLocation' => 'lobby',  // Starting room, can change based on your design
        'inventory' => [],
    ];
}


$outputMessage = '';

// Processing User Input
if (isset($_POST['command'])) {
    $command = strtolower(trim($_POST['command']));

    if (isset($_SESSION['gameState']['pickupMode']) && $_SESSION['gameState']['pickupMode'] == true) {
        if ($command == "back") {
            unset($_SESSION['gameState']['pickupMode']);
        } else {
            lootItem($command);
            unset($_SESSION['gameState']['pickupMode']);
        }
    } else {
        switch ($command) {
            case 'north':
            case 'south':
            case 'east':
            case 'west':
                navigate($command);
                break;
            case 'check':
                $outputMessage = displayConnections();
                break;
            case 'pickup':
                pickup();
                break;
            case 'scan':
                scan();
                break;
        }
    }
}


if (isset($_POST['reset'])) {
    $_SESSION['gameState']['playerLocation'] = 'lobby'; // Reset to starting room
    $_SESSION['gameState']['inventory'] = [];  // Clear the inventory
    header("Location: index.php");  // Use PRG pattern here to avoid resubmission
    exit();
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
</head>

<body class="game-container">

    <h1 class="game-title">Text-Based Adventure Game</h1>

    <p class="game-output">
        <?php echo $outputMessage; ?>
    </p>

    <p class="game-description">
        <?php
        $currentRoom = $_SESSION['gameState']['playerLocation'];
        echo $rooms[$currentRoom]['description'];
        ?>
    </p>



    <p class="game-inventory">Items in your inventory:
        <?php echo empty($_SESSION['gameState']['inventory']) ? "None" : implode(', ', $_SESSION['gameState']['inventory']); ?>
    </p>



    <form class="game-form" action="index.php" method="post">
        <input class="game-input" type="text" name="command" placeholder="Enter command (e.g., 'north')">
        <input class="game-command" type="submit" value="Submit">
        <input class="game-reset" type="submit" name="reset" value="Reset Position">
    </form>

</body>

</html>