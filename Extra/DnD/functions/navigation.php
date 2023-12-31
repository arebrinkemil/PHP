<?php

// Load room definitions (assuming you have these in config.php)
global $rooms;
global $enemies;

/**
 * Navigate to a specified direction based on the player's command.
 */
function navigate($direction)
{
    global $rooms;
    global $enemies;

    $currentRoom = $_SESSION['gameState']['playerLocation'];
    $playerInventory = $_SESSION['gameState']['inventory'];

    if (isset($rooms[$currentRoom]['connections'][$direction])) {
        $newRoom = $rooms[$currentRoom]['connections'][$direction];

        // Check if there's any condition for this room transition
        if (in_array($newRoom, $rooms[$currentRoom]['locked'] ?? [])) {
            // Check if the player has the required item to unlock
            $requiredItem = $rooms[$currentRoom]['unlockItems'][$newRoom] ?? null;

            if ($requiredItem && !in_array($requiredItem, $playerInventory)) {
                return "You need the {$requiredItem} to go that way.";
            }
        }

        // Check if there's a guard blocking the path
        foreach ($rooms[$currentRoom]['enemies'] ?? [] as $enemyType => $enemyInfo) {
            if ($enemyInfo['status'] === 'alive') {
                return "You need to defeat the {$enemies[$enemyType]['name']} first!";
            }
        }

        $_SESSION['gameState']['playerLocation'] = $newRoom;
        //echo $rooms[$newRoom]['description'];


    } else {
        return "There's no exit in that direction!";
    }
}


/**
 * Display the connections of the current room.
 */
function displayConnections()
{
    global $rooms;

    $currentRoom = $_SESSION['gameState']['playerLocation'];
    $connections = $rooms[$currentRoom]['connections'];

    if ($connections) {
        $directions = array_keys($connections);
        return "From here, you can go: " . implode(', ', $directions) . ".";
    } else {
        return "It seems there's nowhere to go from here.";
    }
}




/**
 * Check if a certain condition is met, e.g., having a specific item.
 */
// function meetsCondition($condition)
// {
//     switch ($condition['type']) {
//         case 'hasItem':
//             return in_array($condition['item'], $_SESSION['gameState']['inventory']);
//             // ... handle other conditions as needed
//         default:
//             return false;
//     }
// }
