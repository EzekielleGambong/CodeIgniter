<h2>Jokes List (<?= count($jokes) ?>)</h2>
<a href="<?= base_url('jokes/new') ?>">Add new joke</a>

<?php foreach ($jokes as $joke): ?>
    <p><a href="<?= base_url('jokes/' . $joke['id']) ?>"><?= $joke['title'] ?></a> (<?= $joke['created_at'] ?>)</p>
<?php endforeach; ?>
