<?php

declare(strict_types=1);

// TODO: Implement the database logic here.


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $db = new PDO('sqlite:startrek.db');

    $stmt = $db->prepare("DELETE FROM characters WHERE id = :id");
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    header('Location: index.php');
}
