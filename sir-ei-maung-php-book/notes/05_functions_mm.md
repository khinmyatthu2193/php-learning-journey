# PHP Learning Journey — Chapter 6: Functions (မြန်မာဘာသာ)

> ဤမှတ်စုသည် PHP Functions အကြောင်း ဖြည့်စွက်သင်ကြားရေးမှတ်စုဖြစ်ပြီး ဆရာအိမောင်၏ စာအုပ်မှ တိုက်ရိုက်ကူးယူထားခြင်း မဟုတ်ပါ။

## 1. Function ဆိုတာဘာလဲ?
Function ဆိုတာ အလုပ်တစ်ခုကို လုပ်ဆောင်ဖို့ Code တွေ စုထားတဲ့ Block ဖြစ်ပါတယ်။ တစ်ခါရေးပြီး အကြိမ်ကြိမ် ပြန်ခေါ်သုံးနိုင်ပါတယ်။

```php
function greet($name) {
    echo "Hello, $name!\n";
}
greet("Khin");
```

## 2. Parameters နဲ့ Arguments
Function ကြေညာတဲ့အခါ သတ်မှတ်ထားတဲ့ `$a`, `$b` က **parameters** ဖြစ်ပြီး ခေါ်တဲ့အခါ ပေးလိုက်တဲ့ `2`, `3` က **arguments** ဖြစ်ပါတယ်။

```php
function add($a, $b) {
    return $a + $b;
}
echo add(2, 3); // 5
```

## 3. `echo` နဲ့ `return` ကွာခြားချက်
- `echo` က စာသား/တန်ဖိုးကို ထုတ်ပြတာပါ။ Function ရဲ့ result ကို ပြန်ပို့တာ မဟုတ်ပါ။
- `return` က Function ခေါ်ထားတဲ့နေရာဆီ တန်ဖိုးပြန်ပို့ပြီး Function ကို ရပ်စေပါတယ်။
- `return` မပါတဲ့ Function က `null` ပြန်ပေးပါတယ်။

```php
function sum(int $a, int $b): int {
    return $a + $b;
}
$result = sum(4, 6);
echo $result; // 10
```

## 4. Default Parameters နဲ့ Named Arguments
Argument မပေးတဲ့အခါ default value ကို သုံးနိုင်ပါတယ်။ PHP 8+ မှာ parameter အမည်နဲ့လည်း ပေးနိုင်ပါတယ်။

```php
function greetUser(string $name = "Guest"): string {
    return "Hello, $name";
}
echo greetUser(); // Hello, Guest
echo greetUser(name: "Khin"); // Hello, Khin
```

## 5. Variable Scope
Function အတွင်း ကြေညာထားတဲ့ Variable က ပုံမှန်အားဖြင့် အဲဒီ Function အတွင်းမှာပဲ အသုံးပြုနိုင်ပါတယ်။ ပြင်ပက တန်ဖိုးလိုအပ်ရင် Argument အဖြစ် ပေးတာ ပိုရှင်းပါတယ်။

```php
$name = "Alice";
function demo(): void {
    $name = "Bob";
    echo $name; // Bob
}
demo();
echo $name; // Alice
```

## 6. Type Declarations
`int`, `string`, `float`, `bool`, `array` စတဲ့ Type တွေကို Parameter နဲ့ Return Value မှာ သတ်မှတ်နိုင်ပါတယ်။ `?string` ဆိုရင် `string` သို့မဟုတ် `null` လက်ခံနိုင်ပါတယ်။

```php
function label(?string $name): string {
    return $name ?? "Guest";
}
echo label(null); // Guest
```

`declare(strict_types=1);` ကို PHP File ထိပ်မှာ ထည့်သုံးရင် အဲဒီ File က ခေါ်တဲ့ Function တွေရဲ့ scalar argument type စစ်ဆေးမှု ပိုတင်းကျပ်ပါတယ်။

## 7. Pass by Value / Pass by Reference
ပုံမှန် Parameter ကို ပြင်လိုက်တာနဲ့ မူရင်း Variable မပြောင်းပါဘူး။ မူရင်းကို ပြောင်းချင်မှ `&` သုံးပါ။

```php
function increase(int &$number): void {
    $number++;
}
$x = 3;
increase($x);
echo $x; // 4
```

## 8. Anonymous Function နဲ့ Arrow Function
နာမည်မပါတဲ့ Function ကို Variable ထဲ သိမ်းနိုင်ပါတယ်။ Arrow Function က Expression တိုတိုရေးဖို့ အသုံးဝင်ပါတယ် (PHP 7.4+)။

```php
$double = function ($n) { return $n * 2; };
$triple = fn($n) => $n * 3;
echo $double(4); // 8
echo $triple(4); // 12
```

## 9. Variadic Parameters
`...` သုံးပြီး Argument အများကြီး လက်ခံနိုင်ပါတယ်။

```php
function total(int ...$numbers): int {
    return array_sum($numbers);
}
echo total(2, 3, 4); // 9
```

## 10. PHP Built-in Functions
`strlen("PHP")` → 3, `count([1,2])` → 2, `strtoupper("php")` → `PHP`, `array_sum([1,2,3])` → 6 ဖြစ်ပါတယ်။

## 11. Practical Example
```php
function getResult(int $score): string {
    if ($score >= 80) return "Excellent";
    if ($score >= 50) return "Passed";
    return "Needs Improvement";
}

$students = ["Alice" => 85, "Bob" => 65, "Khin" => 45];
foreach ($students as $name => $score) {
    echo "$name: " . getResult($score) . "\n";
}
```

## 12. မှားတတ်တဲ့အချက်များ
- Function ကို ကြေညာထားရုံနဲ့ အလုပ်မလုပ်သေးပါ။ ခေါ်သုံးရပါတယ်။
- `echo` နဲ့ `return` ကို မရောထွေးပါနဲ့။
- Local Variable ကို Function အပြင်ကနေ တိုက်ရိုက်မသုံးနိုင်ပါ။
- Argument အရေအတွက်နဲ့ Type ကို စစ်ပါ။
- `return` ရောက်တာနဲ့ Function ဆက်မလုပ်တော့ပါ။

## 13. လေ့ကျင့်ခန်းများ
1. ကိန်းစုံ/မစုံ စစ်တဲ့ `isEven(int $n): bool` ရေးပါ။
2. နာမည်နှစ်ခု ဆက်ပေးတဲ့ `getFullName(string $first, string $last): string` ရေးပါ။
3. Score မရှိရင် `null` ပြန်ပေးတဲ့ `calculateAverage(float ...$scores): ?float` ရေးပါ။
4. အရင် Chapter က `if/elseif` Code ကို Function အဖြစ် ပြောင်းပြီး သုံးကြိမ်ခေါ်ပါ။

**မှတ်ရန်:** Function က Input (Arguments) လက်ခံပြီး Logic လုပ်ဆောင်ကာ လိုအပ်ရင် Output (`return`) ပြန်ပေးပါတယ်။
