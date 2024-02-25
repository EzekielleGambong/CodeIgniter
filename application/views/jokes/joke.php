<h2><?= $joke['title'] ?></h2>
<p><?= $joke['content'] ?></p>
<a href="<?= base_url('jokes/' . ($joke['id'] + 1)) ?>">Add new joke</a>
<a href="<?= base_url('jokes/' . $joke['id'] . '/delete') ?>">Delete joke</a>
