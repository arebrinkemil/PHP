<?php

require_once 'functions.php';

// TODO: Implement the email address generation logic here.
if (isset($_POST['first_name'], $_POST['last_name'])) {
    $firstName = sanitizeName($_POST['first_name']);
    $lastName = sanitizeName($_POST['last_name']);
}

$emailGen = $firstName . "." . $lastName . "@facebook.com";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05</title>
    <style>
        input {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <!-- TODO: Display the generated email sentence here. -->
    <h1><?php echo $emailGen ?></h1>

    <form action="05.php" method="post">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="last_name">Last name</label>
        <input type="text" name="last_name" id="last_name" required>

        <button type="submit">Generate email address</button>
    </form>
</body>

</html>