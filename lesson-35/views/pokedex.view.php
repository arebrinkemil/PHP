<h1> Pokemän</h1>

<?php foreach ($pokemon as $monster) : ?>
    <a href="/pokemon?id=<?= $monster->id; ?>">
        <?= $monster->name; ?>
    </a>
<?php endforeach; ?>