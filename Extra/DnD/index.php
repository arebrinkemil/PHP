<?php


// Include necessary files
require_once 'includes/config.php';
require_once 'functions/navigation.php';
require_once 'includes/rooms.php';


// Initialize the game state if not already initialized
if (!isset($_SESSION['gameState'])) {
    $_SESSION['gameState'] = [
        'playerLocation' => 'lobby',  // Starting room, can change based on your design
        'inventory' => [],
    ];
}

// Processing User Input
if (isset($_POST['command'])) {
    $command = strtolower(trim($_POST['command']));  // Normalize the command

    switch ($command) {
        case 'north':
        case 'south':
        case 'east':
        case 'west':
            navigate($command);
            break;
            // ... handle other commands as needed (like 'take' or 'use')
    }
    header("Location: index.php");
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
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <h1>Text-Based Adventure Game</h1>

    <p>
        <?php
        $currentRoom = $_SESSION['gameState']['playerLocation'];
        echo $rooms[$currentRoom]['description'];
        ?>
    </p>

    <p>Items in your inventory:
        <?php echo empty($_SESSION['gameState']['inventory']) ? "None" : implode(', ', $_SESSION['gameState']['inventory']); ?>
    </p>

    <form action="index.php" method="post">
        <input type="text" name="command" placeholder="Enter command (e.g., 'north')">
        <input type="submit" value="Submit">
    </form>

</body>

</html>