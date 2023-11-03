<?php
session_start();

$_SESSION['title'] = 'Silicon Valley';

echo 'The title of the show is: ' . $_SESSION['title'];
