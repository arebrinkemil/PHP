<?php
require_once 'includes/enemies.php';
require_once 'includes/rooms.php';
function engageCombat($enemyName)
{
    global $enemies, $rooms;
    $combatLog = "";

    $currentRoom = $_SESSION['gameState']['playerLocation'];

    if (!isset($rooms[$currentRoom]['enemies'][$enemyName])) {
        $combatLog .= "The $enemyName is not present in this room!<br>";
        return $combatLog;
    }

    $enemyStats = $enemies[$enemyName];
    $enemyCurrentHealth = &$rooms[$currentRoom]['enemies'][$enemyName]['current_health'];
    $playerHealth = &$_SESSION['gameState']['playerHealth'];

    while ($playerHealth > 0 && $enemyCurrentHealth > 0) {
        $combatLog .= "You attack the $enemyName for 10 damage!<br>";
        $enemyCurrentHealth -= 10;

        if ($enemyCurrentHealth <= 0) {
            $combatLog .= "You have defeated the $enemyName!<br>";
            unset($rooms[$currentRoom]['enemies'][$enemyName]);
            return $combatLog;
        }

        $combatLog .= "The $enemyName attacks you for {$enemyStats['damage']} damage!<br>";
        $playerHealth -= $enemyStats['damage'];

        if ($playerHealth <= 0) {
            $combatLog .= "You have been defeated by the $enemyName!<br>";
            return $combatLog;
        }
    }
    return $combatLog;
}
