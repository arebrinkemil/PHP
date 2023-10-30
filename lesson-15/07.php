<?php

// $dir = '/files';
$files = scandir('files');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedKey = array_key_first($_POST);
    if (isset($files[$selectedKey])) {
        $text = file_get_contents('files/' . $files[$selectedKey]);
    } else {
        $text = "The text file no-valid-name.txt wasn't found";
    }
} else {
    $text = "Please select the text file you want to view";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: row;
        }

        form {
            display: flex;
            flex-direction: column;
            margin: 3rem;
        }

        .text {
            margin: 3rem;
            width: 50vw;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <?php foreach ($files as $key => $file) :
            $keys[] = $key;
            if (substr($file, -3, 3) == "txt") {
        ?>
                <button type="submit" class="btn btn-outline-primary btn-lg" name="<?php echo $key ?>"><?php echo $file . "<br>"; ?></button>
        <?php
            }
        endforeach ?>
    </form>
    <div class="text">
        <?php echo $text ?>

    </div>

</body>

</html>