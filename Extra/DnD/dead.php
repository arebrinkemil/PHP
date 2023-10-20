<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dead</title>
    <style>
        .dead-screen {
            background-color: black;
            color: red;
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dead-text {
            font-size: 8rem;
        }
    </style>

</head>

<body class="dead-screen">
    <div class="dead-text">
        <p>YOU DIED</p>
        <form action="reset" method="post">
            <input class="game-reset" type="submit" name="reset" value="Reset Position">
        </form>
    </div>
</body>

</html>