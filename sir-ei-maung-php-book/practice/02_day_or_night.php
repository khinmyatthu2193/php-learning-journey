<h1>Method 1</h1>
<?php $hour = date('h') ?>
<p>
    <?php
        if($hour < 6 || $hour > 18) {
            echo "<b>Night Time</b>";
        } else {
            echo "<i>Day Time</i>";
        }
    ?>
</p>


<h1>Method 2</h1>
<?php $hour = date('h') ?>
<p>
<?php if($hour < 6 || $hour > 18) { ?>
        <b>Night Time</b>
<?php } else { ?>
         <i>Day Time</i>
<?php } ?>
</p>