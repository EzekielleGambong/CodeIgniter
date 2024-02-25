<h2>Add your own hilarious joke</h2>
<?= form_open('jokes/add_joke') ?>
    <label>Title: <input type="text" name="title"></label><br>
    <label>Content: <textarea name="content"></textarea></label><br>
    <input type="submit" value="Add joke">
</form>
