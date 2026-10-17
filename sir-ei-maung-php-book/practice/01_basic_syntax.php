
<!-- ========================================
     Example 1: PHP Inside HTML
======================================== -->

<h1>Home Page</h1>

<p>
    Total:
    <?php
        $num1 = 3;
        $num2 = 5;

        echo $num1 + $num2;
    ?>
</p>


<!-- ========================================
     Example 2: Separate PHP Tags
======================================== -->

<h1>Home Page</h1>

<?php
    $num1 = 3;
    $num2 = 5;
?>

<p>
    Total: <?php echo $num1 + $num2; ?>
</p>


<!-- ========================================
     Example 3: PHP Short Echo Tag
======================================== -->

<?php
/*
    PHP Short Echo Tag (Output Tag)

    <?= ကို PHP Short Echo Tag လို့ ခေါ်ပါတယ်။

    <?= ကို အသုံးပြုတဲ့အခါ echo keyword ကို
    ထပ်မံရေးသားရန် မလိုအပ်ပါဘူး။
*/
?>

<h1>Home Page</h1>

<?php
    $num1 = 3;
    $num2 = 5;
?>

<p>
    Total: <?= $num1 + $num2 ?>
</p>
  