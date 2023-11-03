<?php
session_start();

$user = [
    'name' => 'Bertram Gilfoyle',
    'email' => 'gilfoyle@piedpiper.io',
    'password' => '$2y$10$Qx.ZsPJooxIqFDewbA9wS.fY6Nkp5qkmJynqkbwxmEyX5Q9Er5EBW',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($email === $user['email'] && password_verify($password, $user['password'])) {
        $_SESSION['authenticated'] = true;
        $_SESSION['message'] = 'You\'ve successfully logged in ' . $user['name'] . '!';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['message'] = 'Whoops! Looks like you missed something. Please try again.';
        header('Location: index.php');
        exit;
    }
}

var_dump($_SESSION['authenticated']);



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
            margin-bottom: 10px;
            min-width: 200px;
        }
    </style>
</head>

<body>
    <?php if (!empty($message)) : ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <?php if (empty($logoutLink)) : ?>
        <form action="login.php" method="post">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="hendriks@piedpiper.io">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <button type="submit">Login</button>
        </form>
    <?php else : ?>
        <?php echo $logoutLink; ?>
    <?php endif; ?>
</body>

</html>