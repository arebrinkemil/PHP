<?php

// Load room definitions (assuming you have these in config.php)
global $rooms;

/**
 * Navigate to a specified direction based on the player's command.
 */
function navigate($direction)
{
    global $rooms;

    $currentRoom = $_SESSION['gameState']['playerLocation'];

    if (isset($rooms[$currentRoom]['connections'][$direction])) {
        $newRoom = $rooms[$currentRoom]['connections'][$direction];

        // Check if there's any condition for this room transition
        if (
            isset($rooms[$currentRoom]['connectionConditions'][$direction]) &&

            !meetsCondition($rooms[$currentRoom]['connectionConditions'][$direction])
        ) {
            echo "You can't go that way!";
        } else {
            $_SESSION['gameState']['playerLocation'] = $newRoom;
            //echo $rooms[$newRoom]['description'];
        }
    } else {
        echo "There's no exit in that direction!";
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
function meetsCondition($condition)
{
    switch ($condition['type']) {
        case 'hasItem':
            return in_array($condition['item'], $_SESSION['gameState']['inventory']);
            // ... handle other conditions as needed
        default:
            return false;
    }
}
