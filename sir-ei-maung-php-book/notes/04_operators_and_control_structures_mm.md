# PHP Learning Journey — Operators & Control Structures (မြန်မာ)

၂၀၂၆ အောက်တိုဘာ ၂၀ ရက် လက်ရေးမှတ်စုများနှင့် `06_operatores_&_controlStructures.php` ကို အခြေခံပြီး ပြန်လည်စီစဉ်ထားသည်။ **ပြင်ဆင်ချက်** နှင့် **ထပ်ဆောင်း** များကို ခွဲဖော်ပြထားသည်။

## ၁။ Arithmetic နှင့် String Concatenation

| Operator | အသုံးပြုပုံ | ဥပမာ |
|---|---|---|
| `+` | ပေါင်း | `5 + 2` → `7` |
| `-` | နုတ် | `5 - 2` → `3` |
| `*` | မြှောက် | `5 * 2` → `10` |
| `/` | စား | `5 / 2` → `2.5` |
| `%` | အကြွင်းရှာ | `5 % 2` → `1` |
| `**` | ထပ်ကိန်း | `6 ** 2` → `36` |
| `.` | String ဆက် | `"Hello" . " World"` |

JavaScript မှာ String ဆက်ဖို့ `+` ကို သုံးနိုင်ပေမယ့် PHP မှာ `.` ကို သုံးပါတယ်။

```php
$greet = "Welcome";
$person = "Khin";
echo $greet . " " . $person . "\n";
echo "$greet and $person\n"; // Double-quoted string ထဲ Variable ထည့်သုံးခြင်း

$data = ["apple", "orange"];
echo $data[0] . " and " . $data[1] . "\n";
echo $data[0], " and ", $data[1], "\n";
```

**ပြင်ဆင်ချက်:** `echo $data;` လို့ Array တစ်ခုလုံးကို ထုတ်ရင် *Array to string conversion* warning ဖြစ်နိုင်ပါတယ်။ Array ကို စစ်ကြည့်ချင်ရင် `print_r($data)` သုံးပါ။ `$data[2]` ကတော့ မရှိတဲ့ index ဖြစ်ပါတယ်။

## ၂။ Comments

```php
// တစ်ကြောင်းတည်း Comment
# တစ်ကြောင်းတည်း Comment
/* စာကြောင်းများစွာ
   Comment */
```

## ၃။ Assignment နှင့် Increment/Decrement

`=` က Value သတ်မှတ်တာပါ။ `+=`, `-=`, `*=`, `/=` တွေက တွက်ချက်ပြီး ပြန် assign လုပ်တာပါ။ `.=` က String ကို ဆက်ထည့်တာပါ။

```php
$x = 10;
$x += 5; // 15
$text = "Hi";
$text .= "!"; // Hi!
```

`$x++` က **အရင် Value ကို ယူပြီးမှ** တိုးတယ်။ `++$x` က **အရင် တိုးပြီးမှ** Value ကို ယူတယ်။ `--` လည်း အလားတူပါပဲ။

```php
$x = 2;
$y = $x++; // x = 3, y = 2

$p = 1;
$q = ++$p; // p = 2, q = 2
```

## ၄။ Comparison Operators

| Operator | အဓိပ္ပာယ် |
|---|---|
| `==` | Value တူလား (လိုအပ်ရင် type conversion လုပ်နိုင်) |
| `!=` / `<>` | မတူဘူးလား |
| `===` | Value **နှင့် Type** နှစ်ခုလုံးတူလား |
| `!==` | Value သို့မဟုတ် Type မတူဘူးလား |
| `<`, `>`, `<=`, `>=` | အငယ်/အကြီး နှိုင်းယှဉ်ခြင်း |
| `<=>` | Spaceship: ငယ်/တူ/ကြီး ကို နှိုင်းယှဉ်ခြင်း |

```php
var_dump(5 == "5");  // true
var_dump(5 === "5"); // false
var_dump(5 !== "5"); // true

echo (2 <=> 3) . "\n"; // -1
echo (3 <=> 3) . "\n"; // 0
echo (3 <=> 2) . "\n"; // 1
```

**ပြင်ဆင်ချက်:** Not identical Operator က `!==` ပါ၊ `!===` မဟုတ်ပါ။ Spaceship ရဲ့ အဓိကသဘောက negative / zero / positive ရလဒ်ဖြင့် အငယ်၊ အတူ၊ အကြီးကို ခွဲပြတာပါ။

**ထပ်ဆောင်း:** Comparison နဲ့ Concatenation တွဲသုံးရင် `( )` ထည့်ရေးတာ ဖတ်ရလွယ်ပြီး Operator Precedence ပြဿနာလည်း လျော့စေပါတယ်။

## ၅။ Logical Operators

- `!` — NOT (ပြောင်းပြန်)
- `&&` / `and` — AND (နှစ်ခုလုံး မှန်ရမယ်)
- `||` / `or` — OR (အနည်းဆုံး တစ်ခုမှန်ရမယ်)
- `xor` — တစ်ခုတည်းမှန်မှ `true` ဖြစ်မယ်

```php
$a = true;
$b = false;
var_dump($a && $b); // false
var_dump($a || $b); // true
var_dump($a xor $b); // true
```

**ထပ်ဆောင်း:** `and`/`or` နဲ့ `&&`/`||` တွေမှာ precedence မတူပါ။ အထူးသဖြင့် assignment နဲ့ တွဲသုံးတဲ့အခါ သတိထားပါ။

## ၆။ Ternary Operator (`? :`)

Condition မှန်ရင် `?` နောက်က Expression ကို ရွေးတယ်။ မှားရင် `:` နောက်က Expression ကို ရွေးတယ်။

```php
$age = 20;
echo $age >= 18 ? "Adult" : "Minor"; // Adult

$name = "";
echo $name ? $name : "Unknown"; // Unknown
echo $name ?: "Unknown";        // Unknown
```

`?:` က Short Ternary ပါ။ ဘယ်ဘက် Value က truthy ဖြစ်ရင် အဲဒီ Value ကို သုံးပြီး falsy ဖြစ်ရင် Default ကို သုံးပါတယ်။ Undefined Variable ကို တိုက်ရိုက်သုံးရင် warning ဖြစ်နိုင်လို့ `isset()` နဲ့ စစ်နိုင်ပါတယ်။

## ၇။ Null Coalescing Operator (`??`)

ဘယ်ဘက် Value **ရှိပြီး `null` မဟုတ်ရင်** အဲဒီ Value ကို ယူတယ်။ မရှိရင် (သို့) `null` ဖြစ်ရင် ညာဘက် Default ကို ယူတယ်။

```php
$name = null;
echo $name ?? "Unknown"; // Unknown

$age = 0;
echo $age ?? 18; // 0

// ထပ်ဆောင်း: PHP 7.4+
$name ??= "Guest";
```

**အဓိက ကွာခြားချက်:** `?:` က `0`, `false`, `""` ကိုပါ falsy အဖြစ် စစ်တယ်။ `??` ကတော့ `null`/undefined ဖြစ်မဖြစ်ကို စစ်တာဖြစ်လို့ `0`, `false`, `""` ကို မလိုအပ်ဘဲ Default နဲ့ မအစားထိုးပါ။

## ၈။ Control Structures

### if / elseif / else

```php
$score = 75;
if ($score >= 80) {
    echo "Excellent";
} elseif ($score >= 50) {
    echo "Pass";
} else {
    echo "Try again";
}
```

PHP မှာ braces `{}` သုံးရင် `elseif` နဲ့ `else if` နှစ်မျိုးလုံး ရပါတယ်။ JavaScript မှာ `else if` သုံးပါတယ်။ PHP ရဲ့ `if: ... endif;` syntax မှာတော့ `elseif` သုံးရပါတယ်။

### switch

```php
$day = date("D");
switch ($day) {
    case "Sat":
    case "Sun":
        echo "Weekend\n";
        break;
    case "Fri":
        echo "TGIF\n";
        break;
    default:
        echo "Weekday\n";
}
```

`switch` က loose comparison (`==`) နဲ့ နှိုင်းယှဉ်ပါတယ်။ `break` မပါရင် နောက် case တွေဆီ ဆက်လုပ်နိုင်ပါတယ်။ **မူရင်း Code ပြင်ဆင်ချက်:** `date("D")` က သောကြာနေ့မှာ `"Fri"` ပြန်ပေးတာဖြစ်လို့ `"fri"` မဟုတ်ပါ။

### match (PHP 8+)

```php
$result = match ($day) {
    "Sat", "Sun" => "Weekend",
    "Fri" => "TGIF",
    default => "Weekday",
};
echo $result;
```

`match` က strict comparison (`===`) သုံးတယ်၊ Value ပြန်ပေးတယ်၊ `break` မလိုဘူး၊ fall-through မဖြစ်ဘူး။ ကိုက်ညီတဲ့ arm လည်းမရှိ၊ `default` လည်းမရှိရင် `UnhandledMatchError` ဖြစ်နိုင်ပါတယ်။

## ၉။ Loops (မူရင်းမှတ်စုတွင် အမည်များပါပြီး ဥပမာများ ထပ်ဖြည့်ထားသည်)

```php
$i = 1;
while ($i <= 3) { echo $i++; } // 123

do { echo $i--; } while ($i > 1); // 432

for ($n = 1; $n <= 3; $n++) { echo $n; } // 123

$fruits = ["apple", "orange"];
foreach ($fruits as $fruit) { echo $fruit . "\n"; }
```

`while` က မလုပ်ခင် Condition စစ်တယ်။ `do...while` က အနည်းဆုံး တစ်ကြိမ် အလုပ်လုပ်တယ်။ `for` က အကြိမ်ရေ သတ်မှတ်ထားတဲ့ Loop တွေမှာ အဆင်ပြေတယ်။ `foreach` က Array အတွက် အထူးအသုံးဝင်ပါတယ်။

## ၁၀။ မှတ်ထားရန်

- Terminal မှာ Newline ထုတ်ဖို့ `"\n"` သုံးပါ။ Browser HTML မှာ `<br>` သုံးပါ။
- `echo` နဲ့ `,` သုံးတာက Argument များ ခွဲပေးတာဖြစ်ပြီး `.` က String Concatenation ဖြစ်ပါတယ်။
- `echo (2 <=> 3) . "\n";` လို Parentheses သုံးပြီး Operator Precedence ကို ရှင်းလင်းစေပါ။
- Boolean ရလဒ်နဲ့ Type ကို မြင်ချင်ရင် `var_dump()` သုံးပါ။

**လေ့ကျင့်ခန်း:** `??` နဲ့ Username Default သတ်မှတ်ခြင်း၊ `match` နဲ့ Weekday ခွဲခြင်း၊ `foreach` နဲ့ Hobbies Array ထုတ်ခြင်းတို့ကို Script တစ်ခုထဲမှာ စမ်းရေးကြည့်ပါ။
