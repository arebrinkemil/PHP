<?php

// $dir = '/files';
$files = scandir('files');

function sanitizeName($name)
{
    $CleanName = trim(strtolower(filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS)));
    return $CleanName;
}


$name = "";
$content = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'], $_POST['content'])) {
        $name = sanitizeName($_POST['name']);
        $content = sanitizeName($_POST['content']);
    }

    file_put_contents('files/' . $name . ".txt", $content, FILE_APPEND);

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

    <div class="container">
        <div class="row mt-5 justify-content-md-center">
            <div class="col-md-6 ml-center">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="dana-scully.txt" class="form-control" required>
                        <small class="form-text">Please provide a filename without an extension.</small>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" rows="8" cols="80" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Note</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>