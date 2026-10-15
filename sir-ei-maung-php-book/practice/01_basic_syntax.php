<!-- Simple PHP Syntax -->

<!-- <h1>Home Page</h1>
<p>
    Total:
    <?php
        $num1 = 3;
        $num2 = 5;
        echo $num1 + $num2;
    ?>
</p> -->


<!-- With separate PHP tags  -->

<h1>Home Page</h1>
<?php
    $num1 = 3;
    $num2 = 5;
?>
<p>
    Total: <?php echo $num1 + $num2 ?>
</p>


<!-- Using Output Tag -->

<!-- <?= အဖွင့်နဲ့ ?> အပိတ်ကို သုံးလိုက်တာပါ။ Output Tag လို့ ပေ ါ်နိုင်ပါတယ်။ ဒီ Output Tag ကိုသုံးရင်
echo Keyword ထည့်စရာ မလိုပေတာ့ပါဘူး။ ရလဒ်ကို တစ်ခါထဲ ဖော်ပြပေးလိုက်မှာ မို့လို့ပါ။  -->

<h1>Home Page</h1>
<?php
    $num1 = 3;
    $num2 = 5;
?>
<p>
    Total: <?= $num1 + $num2 ?>
</p>