<?php
$database = new PDO('sqlite:tmdb.db');



if (isset($_POST['movie_search'])) {
    $input = htmlspecialchars(trim($_POST['movie_search']));
    $search = '%' . $input . '%';

    $stmt = $database->prepare("SELECT title FROM movies WHERE title LIKE :name");
    $stmt->bindParam(':name', $search);

    $stmt->execute();
    $movies = $stmt->fetchAll();
}


if (empty($movies)) {
    echo "Not Found
    The movie wasn't found in the database.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
                <form action="05.php" method="post">


                    <div class="mb-3">
                        <label for="tmdb_url" class="form-label">search for movie</label>
                        <input class="form-control" type="string" name="movie_search" id="movie_search">

                    </div>

                    <div class="mb-3">
                        <p>results:</p>
                        <ul>
                            <?php foreach ($movies as $movie) : ?>
                                <li>
                                    <p><?= $movie['title'] ?></p>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>

                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>