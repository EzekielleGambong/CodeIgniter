<!DOCTYPE html>
<html>
    <head>
        <title>Feedback Form</title>
    </head>
    <body>
        <form action="<?= site_url('feedbackcontroller/submit'); ?>" method="post">
            <h1>Feedback Form</h1>
            <div>
                <label for="name">Your name (optional)</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="course">Course Title</label>
                <select id="course" name="course">
                    <option value="1">PHP track</option>
                    <option value="2">Web fundamentals</option>
                </select>
            </div>
            <div>
                <label for="score">Given score (1-10)</label>
                <select name="score" id="score">
                    <?php for ($i = 1; $i <= 10; $i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div>
                <label for="reason">Reason</label>
                <textarea name="reason" id="reason"></textarea>
            </div>
            <input type="submit">
        </form>
        
    </body>
</html>
