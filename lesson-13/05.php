<?php
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

echo "Your email address is " . $email . " and your password is " . $password;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post">
        <label>
            <input name="email">
        </label>
        <label>
            <input name="password">
        </label>
        <button type="submit"></button>
    </form>
</body>

</html>