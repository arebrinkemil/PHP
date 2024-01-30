<?php if (!empty($pokemon)) : ?>
    <?php foreach ($pokemon as $monster) : ?>
        <div>
            <h2><?= $monster->name ?></h2>

            <img src="https://img.pokemondb.net/sprites/bank/normal/<?= strtolower($monster->name) ?>.png" style="transform: scale(2.0)" alt="<?= $monster->name ?>">
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No Pokemon found.</p>
<?php endif; ?>