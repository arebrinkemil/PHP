<?php

// Start the session (essential for storing game state)
session_start();

// Game settings or constants (if any)
define('MAX_INVENTORY_SIZE', 3);  // just as an example

// Include essential files
require_once 'includes/rooms.php';
require_once 'functions/navigation.php';
require_once 'functions/items.php';
// ... any other includes you might have

// Global settings or initialization
// You could set up default game state here if needed, 
// but since we're doing that in index.php, it's not included here
