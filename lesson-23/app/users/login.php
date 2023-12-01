<?php


declare(strict_types=1);


require __DIR__ . '/../autoload.php';

// In this file we login users.
if (isset($_POST['email'], $_POST['password'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $statement = $database->prepare('SELECT * from users where email = :email');
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->execute();


    $user = $statement->fetch(PDO::FETCH_ASSOC);


    if (!$user) {
        $_SESSION['error'] = "wrong credentials";
        redirect('/');
    } else {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            redirect('/');
        } else {
            echo "wrong password";
        }
    }
    unset($password);
}
