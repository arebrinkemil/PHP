<?php

$characters = [
    [
        'name' => 'Larry',
        'quotes' => [
            'Did he actually refer to himself as "the talent"?',
        ],
    ],
    [
        'name' => 'Phil Connors',
        'quotes' => [
            'Do you want to throw up here or in the car?',
            'I\'m not going to live by their rules anymore.',
            'It\'s just still once a year, isn\'t it?',
        ],
    ],
    [
        'name' => 'Rita',
        'quotes' => [
            'Well, first of all, he\'s too humble to know he\'s perfect.',
            'Why would anyone wanna steal a Groundhog?',
        ],
    ],
];



foreach ($characters as $key => $character) : ?>
    <h3><?php echo $character['name'] ?></h3>
    <ol>
        <?php $numberQuotes = count($character['quotes']);


        for ($i = 0; $i < $numberQuotes; $i++) : ?>
            <li>
                <?php echo $character['quotes'][$i]; ?>
            </li>
        <?php endfor ?>


    </ol>

<?php endforeach ?>