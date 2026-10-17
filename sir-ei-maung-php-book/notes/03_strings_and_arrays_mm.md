# အခန်း (၄) — Strings & Arrays (မြန်မာဘာသာ မှတ်စု)

> **ကိုးကားထားသည့် သင်ခန်းစာများ:** ကိုယ်တိုင်ရေးထားသော notebook စာမျက်နှာ ၇–၉၊ `04_strings.php` နှင့် `05_array.php`။ ဤမှတ်စုသည် ပေးထားသော သင်ခန်းစာများအပေါ် အခြေခံထားပြီး စာအုပ်အခန်းတစ်ခုလုံးကို အတိအကျ ကူးယူထားခြင်း မဟုတ်ပါ။

## ၁။ String ဆိုတာဘာလဲ

**String** ဆိုတာ စာသား (text) ကို သိမ်းဆည်းတဲ့ Data Type ဖြစ်ပါတယ်။ PHP မှာ Single Quote (`' '`) နဲ့ Double Quote (`" "`) ကို သုံးနိုင်ပါတယ်။

```php
<?php
$name = "Khin";
echo 'Hello $name'; // Hello $name
echo "Hello $name"; // Hello Khin
```

- **Single Quote** ထဲမှာ `$name` ကို Variable အဖြစ် အစားထိုးမပေးဘဲ စာသားအတိုင်း ဖော်ပြပါတယ်။
- **Double Quote** ထဲမှာ `$name` ရဲ့ Value ကို ထည့်သွင်းဖော်ပြပေးပါတယ် (Variable Interpolation)။
- String နှစ်ခုကို `.` (Concatenation Operator) နဲ့ ဆက်နိုင်ပါတယ်။

```php
echo 'Hello ' . $name; // Hello Khin
```

### အသုံးများသော String Functions

| Function | အသုံးပြုပုံ |
|---|---|
| `strlen()` | String ရဲ့ **byte အရေအတွက်** ကို ရယူရန် |
| `str_word_count()` | Word အရေအတွက်ကို ရေတွက်ရန် (အင်္ဂလိပ်စာကဲ့သို့သော စာသားများအတွက် သင့်တော်) |
| `strrev()` | String ကို နောက်ပြန်လှန်ရန် (byte အခြေခံ) |
| `strpos()` | ရှာဖွေလိုသော စာသား၏ စတင်တည်နေရာကို ရယူရန် |
| `substr()` | String အပိုင်းတစ်ခုကို ဖြတ်ယူရန် |
| `str_replace()` | စာသားကို ရှာပြီး အစားထိုးရန် |
| `str_repeat()` | စာသားကို အကြိမ်ကြိမ် ထပ်ရေးရန် |
| `strtoupper()` / `strtolower()` | အက္ခရာအကြီး / အသေး ပြောင်းရန် |
| `ucfirst()` / `ucwords()` | ပထမအက္ခရာ / စကားလုံးတိုင်းရဲ့ ပထမအက္ခရာကို အကြီးပြောင်းရန် |
| `trim()` / `ltrim()` / `rtrim()` | ဘေးနှစ်ဖက် / ဘယ် / ညာရှိ whitespace များ ဖယ်ရန် |
| `str_pad()` | သတ်မှတ်ထားသော အရှည်ပြည့်အောင် စာသားဖြည့်ရန် |

```php
echo strlen("Hello World");                      // 11
echo str_replace("World", "PHP", "Hello World"); // Hello PHP
echo substr("Hello World", 0, 5);               // Hello
echo str_repeat("Hi", 3);                       // HiHiHi
echo str_pad("Hello", 10, "-");                // Hello-----
```

### မြန်မာစာနဲ့ UTF-8

`strlen()` က Character အရေအတွက်မဟုတ်ဘဲ **byte** ကို ရေတွက်ပါတယ်။

```php
echo strlen("ကခဂ");             // 9 bytes
echo mb_strlen("ကခဂ", "UTF-8"); // 3 characters
```

`mb_strlen()` အသုံးပြုဖို့ PHP ရဲ့ **mbstring extension** လိုပါတယ်။ `substr()` နဲ့ `strrev()` လို byte အခြေခံ Function တွေကို မြန်မာစာနဲ့ အသုံးပြုရာမှာ သတိထားရပါတယ်။

## ၂။ Array ဆိုတာဘာလဲ

**Array** က Value အများကြီးကို Variable တစ်ခုတည်းထဲမှာ သိမ်းဆည်းနိုင်တဲ့ Data Structure ဖြစ်ပါတယ်။ ကိုယ့်မှတ်စုမှာ အဓိကအားဖြင့် **Indexed (Numeric) Array** နဲ့ **Associative Array** ဆိုပြီး နှစ်မျိုး ခွဲလေ့လာထားပါတယ်။ PHP Array တစ်ခုထဲမှာ Integer Key နဲ့ String Key နှစ်မျိုးလုံး သုံးနိုင်ပါတယ်။

### Indexed / Numeric Array

Index ကို နံပါတ်နဲ့ သုံးပါတယ်။ အလိုအလျောက်သတ်မှတ်တဲ့ Index တွေက ပုံမှန်အားဖြင့် `0` က စပါတယ်။

```php
$users = array("Alice", "Bob", "Charlie"); // ရှေးပုံစံ
$fruits = ["Apple", "Banana", "Cherry"];   // PHP 5.4+ ပုံစံ

echo $users[0];  // Alice
echo $fruits[1]; // Banana
```

`echo $fruits;` လို့ Array တစ်ခုလုံးကို တိုက်ရိုက် ထုတ်ရင် *Array to string conversion* Warning ရနိုင်ပါတယ်။ Array အကြောင်းအရာကို ကြည့်ချင်ရင်—

```php
print_r($fruits);  // Key နဲ့ Value တွေကို ပြမယ်
var_dump($fruits); // Data Type အပါအဝင် အသေးစိတ် ပြမယ်
```

### Associative Array

Index အစား အဓိပ္ပာယ်ရှိတဲ့ **String Key** ကို သုံးပါတယ်။

```php
$user = [
    "name" => "Alice",
    "age" => 25,
    "email" => "alice@example.com"
];
echo $user["name"]; // Alice
```

### Element အသစ်ထည့်ခြင်း / ပြင်ခြင်း

```php
$fruits = ["Apple", "Banana", "Cherry"];
$fruits[] = "Durian";      // Index 3 မှာ ထည့်မယ်
$fruits[5] = "Elderberry"; // Index 5 ကို ကိုယ်တိုင် သတ်မှတ်မယ်
$fruits[1] = "Orange";     // Index 1 ရဲ့ Value ကို ပြင်မယ်
```

`[]` က နောက်ထပ် အသုံးပြုမယ့် Integer Key ကို ရွေးပေးပါတယ်။ Index ကြားမှာ နေရာလွတ်ရှိတိုင်း အဲဒီနေရာကို ဖြည့်မပေးပါဘူး။

### Array Destructuring

Array ထဲက Value တွေကို Variable အသီးသီးထဲ ခွဲထုတ်သိမ်းဆည်းတာ ဖြစ်ပါတယ်။ ကိုယ့် Code ထဲမှာ PHP 7.1+ ရဲ့ Named-Key Destructuring ကို အသုံးပြုထားပါတယ်။

```php
$user = ["name" => "Alice", "age" => 25];
list("name" => $name, "age" => $age) = $user;
// ဒါမှမဟုတ်
["name" => $name, "age" => $age] = $user;
echo $name; // Alice
```

### Array ကူးယူခြင်း

PHP Array ကို ပုံမှန် `=` နဲ့ ကူးရင် Value အနေနဲ့ ကူးပါတယ် (Copy-on-Write)။ Copy ကို ပြင်တာကြောင့် မူရင်း Array မပြောင်းပါဘူး။

```php
$oldArray = [1, 2, 3];
$newArray = $oldArray;
$newArray[0] = 100;
echo $oldArray[0]; // 1
echo $newArray[0]; // 100
```

## ၃။ အသုံးများသော Array Functions

| Function | အသုံးပြုပုံ |
|---|---|
| `count()` | Element အရေအတွက် |
| `max()` / `min()` | အကြီးဆုံး / အသေးဆုံး Value |
| `is_array()` | Array ဖြစ်မဖြစ် စစ်ရန် |
| `in_array()` | Value တစ်ခု ပါမပါ စစ်ရန် |
| `array_search()` | Value ရှိတဲ့ Key ကို ရှာရန် (`false` လည်း ပြန်နိုင်) |
| `array_sum()` | ကိန်းဂဏန်းများ ပေါင်းရန် |
| `array_keys()` / `array_values()` | Key များ / Value များကို Array အဖြစ် ရယူရန် |

```php
$nums = [1, 2, 3, 4, 5];
echo count($nums);             // 5
echo array_sum($nums);         // 15
echo array_search(4, $nums);  // 3
var_dump(in_array(3, $nums)); // bool(true)
```

**သတိ:** `array_search()` က Key `0` ကိုလည်း ပြန်နိုင်လို့ ရှာတွေ့မတွေ့ စစ်ချင်ရင် `!== false` ကို သုံးသင့်ပါတယ်။

## ၄။ Array ကို ပြုပြင်ခြင်း

```php
$nums = [1, 2, 3, 4, 5];
array_push($nums, 6);       // [1, 2, 3, 4, 5, 6]
array_pop($nums);           // [1, 2, 3, 4, 5]
array_shift($nums);         // [2, 3, 4, 5]
array_unshift($nums, 0);    // [0, 2, 3, 4, 5]
array_splice($nums, 2, 1);  // [0, 2, 4, 5]
$reversed = array_reverse($nums); // [5, 4, 2, 0]
```

- `array_push()` — နောက်ဆုံးမှာ ထည့်မယ်။
- `array_pop()` — နောက်ဆုံး Element ကို ဖယ်မယ်။
- `array_shift()` — ပထမ Element ကို ဖယ်မယ်။
- `array_unshift()` — ရှေ့ဆုံးမှာ ထည့်မယ်။
- `array_splice()` — မူရင်း Array ထဲက Element တွေကို ဖြတ်/ပြင်မယ်။
- `array_reverse()` — နောက်ပြန်စီထားတဲ့ **Array အသစ်** ပြန်ပေးမယ်။ မူရင်း Array မပြောင်းပါဘူး။

## ၅။ Array Sorting

```php
$numbers = [4, 2, 5, 1, 3];
sort($numbers);  // [1, 2, 3, 4, 5]
rsort($numbers); // [5, 4, 3, 2, 1]

$scores = ["Alice" => 80, "Bob" => 95, "Charlie" => 70];
asort($scores); // Value အလိုက်စီပြီး Key တွေကို ထိန်းမယ်
ksort($scores); // Key အလိုက်စီမယ်
```

`sort()` နဲ့ `rsort()` က Numeric Key တွေကို ပြန်စီပေးပါတယ်။ `usort()` ကို ကိုယ်တိုင်ရေးတဲ့ Comparison Function နဲ့လည်း အသုံးပြုနိုင်ပါတယ်။

```php
$students = [
    ["name" => "Tom", "age" => 25],
    ["name" => "Bob", "age" => 30],
    ["name" => "Charlie", "age" => 35]
];
usort($students, function ($a, $b) {
    return $a["age"] <=> $b["age"];
});
```

ဒီ Code က ကျောင်းသားတွေကို `age` ငယ်ရာက ကြီးရာ စီပေးပါတယ်။

## ၆။ String နဲ့ Array အပြန်အလှန် ပြောင်းခြင်း

```php
$input = "A quick brown fox jumps over the lazy dog";
$words = explode(" ", $input); // String ကို Array ခွဲမယ်
$output = implode(" ", $words); // Array ကို String ပြန်ဆက်မယ်
echo $output;
```

## အနှစ်ချုပ် 📝

- Single Quote မှာ Variable ကို ပုံမှန်အားဖြင့် အစားမထိုးပါဘူး။ Double Quote မှာ အစားထိုးပါတယ်။
- `strlen()` က Byte ကို ရေတွက်ပါတယ်။ Unicode Character တွေအတွက် `mb_strlen()` ကို သုံးနိုင်ပါတယ်။
- Indexed Array က နံပါတ် Key၊ Associative Array က String Key ကို အဓိက အသုံးပြုပါတယ်။
- `print_r()` က Array အကြောင်းအရာ၊ `var_dump()` က Data Type အပါအဝင် ပြပါတယ်။
- `[]` နဲ့ Element ထပ်ထည့်နိုင်ပါတယ်။
- Sorting Function အများစုက မူရင်း Array ကို ပြောင်းလဲပါတယ်။

## Self-Test ✍️

1. `$name = "Khin";` ဖြစ်ရင် `echo 'Hi $name';` က ဘာထုတ်မလဲ။
2. `strlen("ကခဂ")` က `9` ဖြစ်ပြီး `mb_strlen("ကခဂ", "UTF-8")` က `3` ဖြစ်တာ ဘာကြောင့်လဲ။
3. `print_r()` နဲ့ `var_dump()` ဘာကွာသလဲ။
4. `[0 => "A", 5 => "B"]` ထဲ `[]` နဲ့ ထပ်ထည့်ရင် ဘယ် Index ကို သုံးမလဲ။
5. `$copy = $original;` လုပ်ပြီး `$copy[0]` ကို ပြင်ရင် မူရင်း Array ပြောင်းမလား။
6. Associative Array ရဲ့ Value အလိုက် စီပြီး Key မပျောက်အောင် ဘယ် Function သုံးမလဲ။
7. `explode()` နဲ့ `implode()` ဘာကွာသလဲ။
8. အောက်က Code ရဲ့ Output ကို ခန့်မှန်းပါ။

```php
$items = ["A", "B", "C"];
$items[] = "D";
unset($items[1]);
print_r($items);
```
