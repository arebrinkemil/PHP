<?php

session_start();

$_SESSION['actor'] = "Leonardo DiCaprio";
$_SESSION['Title'] = "The Revenant";


//fetch from session
echo $_SESSION['actor'] . " won the Academy Award for Best Actor for his portrayal of Hugh Glass in the 2015 film " . $_SESSION['Title'] . ".";
