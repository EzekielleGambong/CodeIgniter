<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Game</title>
</head>
<body>
    <h1>Random Number Game</h1>
    <p>Random Number: <?= $randomNumber ?></p>
    <p>Count: <?= $count ?> winner(s)</p>
    <form action="<?= site_url('randomcontroller/pick'); ?>" method="post">
        <input type="submit" value="Pick Another">
    </form>
</body>
</html>
