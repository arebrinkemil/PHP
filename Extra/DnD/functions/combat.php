<?php
require_once 'includes/enemies.php';
require_once 'includes/rooms.php';
function engageCombat($enemyName)
{
    global $enemies, $rooms;

    $currentRoom = $_SESSION['gameState']['playerLocation'];

    // Check if the enemy exists in the room
    if (!isset($rooms[$currentRoom]['enemies'][$enemyName])) {
        echo "The $enemyName is not present in this room!";
        return;
    }

    $enemyStats = $enemies[$enemyName];
    // Reference to enemy's current health in the room
    $enemyCurrentHealth = &$rooms[$currentRoom]['enemies'][$enemyName]['current_health'];

    // Reference to player's health from session
    $playerHealth = &$_SESSION['gameState']['playerHealth'];

    while ($playerHealth > 0 && $enemyCurrentHealth > 0) {
        echo "You attack the $enemyName for 10 damage!";
        $enemyCurrentHealth -= 10;

        if ($enemyCurrentHealth <= 0) {
            echo "You have defeated the $enemyName!";
            unset($rooms[$currentRoom]['enemies'][$enemyName]); // remove the enemy from the room's list
            return;
        }

        echo "The $enemyName attacks you for {$enemyStats['damage']} damage!";
        $playerHealth -= $enemyStats['damage'];

        if ($playerHealth <= 0) {
            echo "You have been defeated by the $enemyName!";
            // Here, you might want to reset the game or make the player respawn, etc.
            return;
        }
    }
}
