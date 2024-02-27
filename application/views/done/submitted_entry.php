<!DOCTYPE html>
<html>
    <head>
        <title>Submitted Entry</title>
    </head>
    <body>
        <h1>Submitted Entry</h1>
        <p>Your name (optional): <?= isset($name) ? $name : 'N/A'; ?></p>
        <p>Course Title: <?= isset($course) ? $course : 'N/A'; ?></p>
        <p>Given score (1-10): <?= isset($score) ? $score : 'N/A'; ?></p>
        <p>Reason: <?= isset($reason) ? $reason : 'N/A'; ?></p>
    </body>
</html>
