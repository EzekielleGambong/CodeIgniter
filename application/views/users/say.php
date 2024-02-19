<!-- views/users/say.php -->
<h1>Say Something</h1>
<p><?php echo $message; ?></p>
<?php
if (isset($number) && is_numeric($number)) {
    for ($i = 1; $i <= $number; $i++) {
        echo "<p>$message</p>";
    }
}
?>
