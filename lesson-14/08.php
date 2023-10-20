<?php

$errors = [];

$quotes = [
    ['character' => 'Mark Zuckerburg', 'quote' => 'You know, you really don\'t need a forensics team to get to the bottom of this. If you guys were the inventors of Facebook, you\'d have invented Facebook.'],
    ['character' => 'Marylin Delpy', 'quote' => 'You\'re not an asshole, Mark. You\'re just trying so hard to be.'],
];


// TODO: Implement the adding new quotes logic here.
if (isset($_POST['character'], $_POST['quote']) && $_POST['character'] != '' && $_POST['quote'] != '') {
    $dcharacter = $_POST['character'];
    $bcharacter = strip_tags($dcharacter);
    $character = trim(htmlspecialchars($bcharacter,  ENT_QUOTES, 'UTF-8'));
    $dquote = $_POST['quote'];
    $bquote = strip_tags($dquote);
    $quote = trim(htmlspecialchars($bquote,  ENT_QUOTES, 'UTF-8'));
    $quotes[] = ['character' => $character, 'quote' => $quote];
} else {
    if (!isset($_POST['character']) || $_POST['character'] == '') {
        $errors[] = "Character field is missing.";
    }
    if (!isset($_POST['quote']) || $_POST['quote'] == '') {
        $errors[] = "Quote field is missing.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row mt-4">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="h5">Quotes</h1>
                <!-- TODO: Implement the quotes list here. -->
                <ul>
                    <?php foreach ($quotes as $quote) : ?>

                        <li><?php echo $quote['character'] . "\n" . $quote['quote']; ?></li>

                    <?php endforeach ?>
                </ul>
            </div>
        </div>

        <div class="row">
            <form class="col-lg-8 offset-lg-2" action="08.php" method="post">
                <hr>
                <!-- TODO: Implement the errors list here. -->

                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <div class="alert alert-danger" role="alert">
                            <li><?php echo $error ?></li>
                        </div>
                    <?php endforeach ?>
                </ul>

                <div class="mb-3">
                    <label for="character" class="form-label">Character</label>
                    <input type="text" name="character" id="character" class="form-control" placeholder="Sean Parker">
                </div>

                <div class="mb-3">
                    <label for="quote" class="form-label">Quote</label>
                    <textarea name="quote" id="quote" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add quote</button>
            </form>
        </div>
    </main>
</body>

</html>