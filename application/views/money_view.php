<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Making Game</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Money Making Game</h1>
    <div class="container">
        <h2>Current Money: $<?= $current_money ?></h2>
        <?php $history = $this->session->userdata('activity') ? [$this->session->userdata('activity')] : []; ?>
        <div id="activity-box">
            <?php foreach ($history as $value): ?>
                <?= $value ?><br>
            <?php endforeach; ?>
        </div>
        <form action="<?= site_url('moneycontroller/process'); ?>" method="post">
            <input type="hidden" name="action" value="Low Risk" />
            <input type="submit" value="Low Risk"/>
        </form>


    </div>
</body>
</html>
