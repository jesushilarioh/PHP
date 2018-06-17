<?php // Example #1: using with html/javascript/css ?>

<?php if ($a < $b) : ?>
<p>a: <?php echo $a ?> is less than b: <?php echo $b ?>
<?php else : ?>
<p>b: <?php echo $b ?> is less than a: <?php echo $a ?>
<?php endif; ?>

<?php // Example #2: using with html/javascript/css ?>
<?php if (isset($_POST["submit"]) && $statement) : ?>
<blockquote><?php echo escape($_POST["firstname"]); ?> successfully updated.</blockquote>
<?php endif; ?>
