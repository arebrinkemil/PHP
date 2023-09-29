
<?php

$movie = [
    'title' => 'Groundhog Day',
    'language' => 'English',
    'website' => 'https://www.themoviedb.org/movie/137-groundhog-day',
];

foreach ($movie as $info) {
    echo $info[0]['title'];
};
