# Chapter 3 — Syntax, Variables & Data Types 🐘

> မြန်မာဘာသာ PHP လေ့လာရေးမှတ်စု — Sir Ei Maung PHP စာအုပ် စာမျက်နှာ ၂၈–၃၈ ကို အခြေခံထားသည်။

---

## ၁။ HTML ထဲမှာ PHP ရေးခြင်း (စာမျက်နှာ ၂၈–၂၉)

PHP Code ကို HTML Element တွေကြားမှာ ထည့်ရေးနိုင်ပါတယ်။ PHP ကို **Server** က Run ပြီး Browser မှာ ပြသဖို့ Output ထုတ်ပေးပါတယ်။

```php
<h1>Home Page</h1>
<p>Total: <?php echo 1 + 2; ?></p>
```

**Browser မှာ မြင်ရမယ့် Result:** `Home Page` နဲ့ `Total: 3` ဖြစ်ပါတယ်။

**မှတ်ရန်:** Browser က PHP Source Code ကို မရပါဘူး။ PHP Run ပြီး ထွက်လာတဲ့ HTML ကိုပဲ ရပါတယ်။ **View Page Source** နဲ့ ထွက်လာတဲ့ HTML ကို ကြည့်နိုင်ပါတယ်။

## ၂။ PHP Tag၊ Statement နဲ့ Semicolon (စာမျက်နှာ ၂၈–၃၀)

- `<?php` — PHP Code စရေးတဲ့ Opening Tag။
- `?>` — လိုအပ်တဲ့အခါ PHP Code အဆုံးသတ်တဲ့ Closing Tag။
- **Statement** — PHP ကို လုပ်ဆောင်ခိုင်းတဲ့ ညွှန်ကြားချက်။
- `;` — Statement အများစုရဲ့ အဆုံးမှာ ထည့်ရတဲ့ Semicolon။

```php
<?php
$num1 = 3;
$num2 = 5;
echo $num1 + $num2;
```

**Output:** `8`

Variable တွေကို PHP Block တစ်ခုမှာ ကြေညာပြီး နောက် PHP Block တစ်ခုမှာလည်း အသုံးပြုနိုင်ပါတယ်။

## ၃။ `echo`, `print` နဲ့ Short Echo (စာမျက်နှာ ၂၉–၃၀)

`echo` နဲ့ `print` နှစ်ခုလုံးက Output ထုတ်ဖို့ သုံးပါတယ်။ စာအုပ်မှာ `print` ကို `echo` အပြင် အခြား Output Keyword အဖြစ် မိတ်ဆက်ထားပါတယ်။

```php
<?php
 echo "Hello";
 print " World";
?>
```

**Output:** `Hello World`

`<?= ... ?>` က `<?php echo ... ?>` ကို အတိုချုံးရေးတဲ့ နည်းလမ်းပါ။

```php
<?php $total = 8; ?>
<p>Total: <?= $total ?></p>
```

**မှတ်ရန်:** `<?= $total ?>` ဆိုတာ `$total` ထဲက Value ကို Output ထုတ်ပေးတာပါ။

## ၄။ PHP Condition နဲ့ HTML ပေါင်းရေးခြင်း (စာမျက်နှာ ၃၁–၃၃)

PHP ရဲ့ `if` / `else` ကို သုံးပြီး Condition ပေါ်မူတည်ကာ HTML Output ကို ပြောင်းလဲနိုင်ပါတယ်။

```php
<?php $hour = (int) date('G'); ?>
<p>
<?php
if ($hour < 6 || $hour > 18) {
    echo '<b>Night Time</b>';
} else {
    echo '<i>Day Time</i>';
}
?>
</p>
```

- `date()` — Date/Time အချက်အလက်ကို Format တစ်ခုနဲ့ ရယူတယ်။
- `||` — **OR** လို့ အဓိပ္ပာယ်ရတယ်။
- `if` — Condition မှန်ရင် သက်ဆိုင်ရာ Code ကို Run တယ်။
- `else` — `if` Condition မမှန်ရင် အခြား Code ကို Run တယ်။

### Alternative Syntax

HTML ကို `echo` ထဲမှာ မရေးဘဲ PHP Control Statement တွေကြားမှာ တိုက်ရိုက်ရေးနိုင်ပါတယ်။

```php
<?php $hour = (int) date('G'); ?>
<?php if ($hour < 6 || $hour > 18): ?>
    <b>Night Time</b>
<?php else: ?>
    <i>Day Time</i>
<?php endif; ?>
```

ဒီ Syntax မှာ `{ }` အစား `:` နဲ့ `endif;` ကို အသုံးပြုပါတယ်။ စာအုပ်မှာ Loop တွေနဲ့ `switch` အတွက်လည်း Alternative Syntax ရှိကြောင်း ဖော်ပြထားပါတယ်။

**Template** ဆိုတာ HTML Presentation နဲ့ Dynamic Data ကို ပေါင်းစပ်ပြီး Page ဖန်တီးရာမှာ အသုံးပြုတဲ့ ပုံစံပါ။ စာအုပ်မှာ **Smarty, Twig, Blade** တို့ကို Template Library ဥပမာတွေအဖြစ် ဖော်ပြထားပါတယ်။

## ၅။ PHP Closing Tag မထည့်ခြင်း (စာမျက်နှာ ၃၄)

PHP Code သီးသန့်ရေးထားတဲ့ File မှာ နောက်ဆုံး `?>` ကို မထည့်ဘဲ ရေးနိုင်ပါတယ်။

```php
<?php
$num1 = 3;
$num2 = 5;
echo $num1 + $num2;
```

Closing Tag နောက်မှာ မလိုအပ်တဲ့ Whitespace တွေ ပါသွားပြီး Output ထွက်လာနိုင်တာကို ရှောင်ရှားနိုင်ပါတယ်။

## ၆။ Variable နဲ့ Dynamic Type (စာမျက်နှာ ၂၉–၃၀၊ ၃၄–၃၅)

**Variable** ဆိုတာ Value တစ်ခုကို သိမ်းထားဖို့ အသုံးပြုတဲ့ နာမည်ပါ။ PHP မှာ Variable Name ကို `$` နဲ့ စရေးပါတယ်။ `var`၊ `let` လို Keyword တွေ မလိုပါဘူး။

```php
<?php
$value = 123;
var_dump($value); // int(123)

$value = "abc";
var_dump($value); // string(3) "abc"
```

PHP ကို **Loosely Typed Language** လို့ ဖော်ပြထားပါတယ်။ Variable တစ်ခုတည်းမှာ အချိန်မတူတဲ့အခါ Type မတူတဲ့ Value တွေ သိမ်းနိုင်ပါတယ်။

`var_dump()` က Value ရဲ့ Data Type နဲ့ အသေးစိတ်ကို ပြပေးပါတယ်။ မကြေညာရသေးတဲ့ Variable ကို သုံးရင် Undefined Variable Warning နဲ့ `NULL` Result ကို စာအုပ်မှာ ပြထားပါတယ်။

## ၇။ Variable Scope (စာမျက်နှာ ၃၅–၃၇)

**Scope** ဆိုတာ Variable ကို ဘယ်နေရာတွေမှာ အသုံးပြုနိုင်သလဲဆိုတဲ့ နယ်ပယ်ပါ။

### Global Scope နဲ့ Function Scope

```php
<?php
$name = "Bob";

function greet() {
    echo $name; // Undefined variable warning
}

greet();
```

Function အပြင်မှာ ကြေညာထားတဲ့ `$name` ကို Function အတွင်းမှာ အလိုအလျောက် မသုံးနိုင်ပါဘူး။

စာအုပ်မှာ `global` Keyword နဲ့ အသုံးပြုနည်းကို ပြထားပါတယ်။

```php
<?php
$name = "Bob";

function greet() {
    global $name;
    echo $name;
}

greet(); // Bob
```

### Block Scope

```php
<?php
function greet() {
    if (true) {
        $name = "Alice";
    }
    echo $name;
}

greet(); // Alice
```

PHP မှာ `if` Block တစ်ခုက သီးခြား Variable Scope မဖန်တီးပါဘူး။ ဒါကြောင့် `if` Block ထဲမှာ Value သတ်မှတ်ခဲ့တဲ့ Variable ကို အဲဒီ Function ထဲမှာ ဆက်သုံးနိုင်ပါတယ်။

## ၈။ `isset()` (စာမျက်နှာ ၃၇)

`isset()` က Variable ကို သတ်မှတ်ထားပြီး **`null` မဟုတ်ဘူးလား** ဆိုတာ စစ်ဆေးပါတယ်။

```php
<?php
var_dump(isset($name)); // bool(false)

$name = "Bob";
var_dump(isset($name)); // bool(true)
```

**မှတ်ရန်:** Boolean ကို `echo` နဲ့ တိုက်ရိုက် Output ထုတ်ရင် `true` အတွက် `1` ပြပြီး `false` အတွက် ဘာမှ မပြပါဘူး။ `var_dump()` နဲ့ စစ်ရင် ပိုရှင်းပါတယ်။

## ၉။ Constant နဲ့ `define()` (စာမျက်နှာ ၃၇–၃၈)

**Constant** ဆိုတာ တစ်ခါသတ်မှတ်ပြီးနောက် Value ပြန်မပြောင်းနိုင်တဲ့ နာမည်ပေးထားသော Value ပါ။

```php
<?php
define("MIN", 1);
define("MAX", 10);

echo MAX; // 10
```

- `define()` မှာ Constant Name နဲ့ Value ကို ပေးရပါတယ်။
- ဒီဥပမာမှာ Constant Name ရှေ့ `$` မထည့်ပါဘူး။
- `MAX = 20;` လို ပြန်သတ်မှတ်ရေးတာက Syntax Error ဖြစ်ပါတယ်။
- ဒီနည်းနဲ့ ကြေညာထားတဲ့ Constant ကို Function အတွင်းမှာလည်း အသုံးပြုနိုင်ကြောင်း စာအုပ်မှာ ဖော်ပြထားပါတယ်။

## ၁၀။ PHP Data Types (စာမျက်နှာ ၃၈)

စာအုပ်မှာ Data Type တွေကို အုပ်စု (၃) စု ခွဲပြထားပါတယ်။

| အုပ်စု | Data Types | အဓိပ္ပာယ် |
|---|---|---|
| Scalar | Boolean, Integer, Float, String | Value တစ်ခုချင်းစီ |
| Compound | Array, Object | Data တွေကို စုစည်းထားနိုင်တဲ့ Type |
| Special | NULL, Resource | Value မရှိခြင်း / အထူး Resource |

### Scalar Types

```php
<?php
$active = true;       // Boolean
$count = 10;         // Integer
$price = 12.5;       // Float
$title = "PHP";      // String
```

### Compound Types

```php
<?php
$colors = ["red", "blue"]; // Array
$user = new stdClass();   // Object
```

### Special Types

```php
<?php
$missing = null; // NULL
```

**Resource** ဆိုတာ ပြင်ပ Resource အချို့ကို ကိုယ်စားပြုတဲ့ အထူး Data Type ဖြစ်ပါတယ်။ ပေးထားတဲ့ စာမျက်နှာတွေမှာတော့ Resource ကို လက်တွေ့ Code နဲ့ မရှင်းပြရသေးပါဘူး။

## ၁၁။ အမြန်ပြန်လည်လေ့ကျင့်ရန် (Quick Review)

1. **PHP Opening Tag?** `<?php`။
2. **PHP ကို HTML ထဲမှာ ရေးလို့ရလား?** ရပါတယ်။ Server မှာ Run ပြီး HTML Output ထုတ်ပေးပါတယ်။
3. **Statement အဆုံးမှာ ဘာသုံးလဲ?** အများအားဖြင့် `;`။
4. **Output ထုတ်ဖို့?** `echo` သို့မဟုတ် `print`။
5. **Short Echo?** `<?= $value ?>`။
6. **Variable Name အစ?** `$`။
7. **Type ကြည့်ဖို့?** `var_dump()`။
8. **Function ထဲက Global Variable သုံးဖို့?** စာအုပ်ဥပမာမှာ `global` သုံးတယ်။
9. **`if` Block က Scope အသစ်ဖန်တီးလား?** မဖန်တီးပါဘူး။
10. **Variable ရှိပြီး `null` မဟုတ်တာ စစ်ဖို့?** `isset()`။
11. **Constant ကြေညာဖို့?** `define()`။
12. **Data Type အုပ်စု (၃) စု?** Scalar, Compound, Special။

---

## ကိုယ်တိုင်ဖြေကြည့်ရန် ✍️

မှတ်စုမကြည့်ဘဲ ဖြေကြည့်ပါ။

1. Server က PHP File ကို Run ပြီးတဲ့အခါ Browser က ဘာကို လက်ခံရရှိသလဲ။
2. `<?php echo $total; ?>` နဲ့ `<?= $total ?>` ဘာကွာသလဲ။
3. PHP Code သီးသန့်ပါတဲ့ File မှာ နောက်ဆုံး `?>` ကို ဘာကြောင့် ချန်ထားနိုင်သလဲ။
4. `echo` မပြနိုင်ပေမဲ့ `var_dump()` က ဘယ်လိုအချက်အလက်တွေ ပြနိုင်သလဲ။
5. Function အပြင်မှာ သတ်မှတ်ထားတဲ့ Variable ကို Function အတွင်းမှာ ဘာကြောင့် အလိုအလျောက် အသုံးမပြုနိုင်သလဲ။
6. PHP ရဲ့ `if` Block က သီးခြား Variable Scope ဖန်တီးသလား။
7. `$name` က `null` ဖြစ်နေရင် `isset($name)` က ဘာပြန်ပေးသလဲ။
8. `MAX = 20;` လို့ Constant ကို ပြန်သတ်မှတ်ဖို့ ကြိုးစားရင် ဘာဖြစ်သလဲ။
9. ဒီအခန်းမှာ မိတ်ဆက်ထားတဲ့ Scalar Data Type (၄) မျိုးကို ဖော်ပြပါ။

**လေ့လာရန် အကြံပြုချက်:** PHP Code ကို မ Run ခင် Output ကို အရင်ခန့်မှန်းပြီးမှ တကယ် Run ကြည့်ပါ။

