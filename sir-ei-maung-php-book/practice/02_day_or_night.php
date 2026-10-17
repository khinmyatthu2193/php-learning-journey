
<!-- ========================================
     Method 1: Standard PHP If-Else
======================================== -->

<h1>Method 1</h1>

<?php
    $hour = (int) date('G');
?>

<p>
    <?php
        if ($hour < 6 || $hour >= 18) {
            echo "<b>Night Time</b>";
        } else {
            echo "<i>Day Time</i>";
        }
    ?>
</p>


<!-- ========================================
     Method 2: PHP Mixed with HTML
======================================== -->

<h1>Method 2</h1>

<?php
    $hour = (int) date('G');
?>

<p>
    <?php if ($hour < 6 || $hour >= 18) { ?>
        <b>Night Time</b>
    <?php } else { ?>
        <i>Day Time</i>
    <?php } ?>
</p>


<!-- ========================================
     Method 3: Alternative PHP Syntax
======================================== -->

<h1>Method 3</h1>

<?php
    $hour = (int) date('G');
?>

<p>
    <?php if ($hour < 6 || $hour >= 18): ?>
        <b>Night Time</b>
    <?php else: ?>
        <i>Day Time</i>
    <?php endif; ?>
</p>

