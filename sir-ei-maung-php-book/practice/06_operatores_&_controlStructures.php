
<?php

// ========================================
// 1. String Concatenation
// ========================================

// JavaScript မှာ String တွေကို ဆက်ဖို့ + ကို သုံးပေမယ့်
// PHP မှာတော့ . (dot operator) ကို အသုံးပြုပါတယ်။

$greet = "Welcome";
$person = "Khin";

// Using concatenation operator (.)
echo $greet . " " . $person . "\n";
// Output: Welcome Khin

// Using variable interpolation
echo "$greet and $person\n";
// Output: Welcome and Khin


// ========================================
// 2. Arrays and Echo Statements
// ========================================

$data = ["apple", "orange"];

// Array ကို echo နဲ့ တိုက်ရိုက် မဖော်ပြနိုင်ပါ။
// echo $data; // Warning: Array to string conversion

// Access array elements
echo $data[0] . "\n";
// Output: apple

// Using string interpolation
echo "$data[0] and $data[1]\n";
// Output: apple and orange

// Using concatenation (.)
echo $data[0] . " and " . $data[1] . "\n";
// Output: apple and orange

// Using multiple echo arguments (,)
// Comma က String တွေကို concatenate လုပ်တာ မဟုတ်ဘဲ
// echo ဆီကို argument တွေ ခွဲပေးတာ ဖြစ်ပါတယ်။

echo $data[0], " and ", $data[1], "\n";
// Output: apple and orange

// Undefined array index
// echo $data[2]; // Warning: Undefined array key 2


// ========================================
// 3. Arithmetic Operators
// ========================================

// Modulus (%) - Find the remainder
echo (5 % 2) . "\n";
// Output: 1

// Exponentiation (**) - Power
echo (6 ** 2) . "\n";
// Output: 36


// ========================================
// 4. PHP Comments
// ========================================

// Single-line comment

# Another single-line comment

/*
    Multi-line comment

    စာကြောင်းများစွာကို Comment
    အဖြစ် ရေးသားနိုင်ပါတယ်။
*/


// ========================================
// 5. Increment Operators
// ========================================

// Post-increment ($x++)
// မူလတန်ဖိုးကို အရင်အသုံးပြုပြီးမှ
// တန်ဖိုးကို 1 တိုးပေးပါတယ်။

$x = 2;
$y = $x++;

echo $x . "\n";
// Output: 3

echo $y . "\n";
// Output: 2


// Pre-increment (++$p)
// တန်ဖိုးကို 1 အရင်တိုးပြီးမှ
// အသစ်ရလာတဲ့တန်ဖိုးကို အသုံးပြုပါတယ်။

$p = 1;
$q = ++$p;

echo $p . "\n";
// Output: 2

echo $q . "\n";
// Output: 2


// ========================================
// 6. Comparison Operators
// ========================================

// Equal (==) - Compare values
var_dump(5 == "5");
// Output: bool(true)

// Identical (===) - Compare value and type
var_dump(5 === "5");
// Output: bool(false)

// Not equal (!=)
var_dump(5 != "5");
// Output: bool(false)

// Not identical (!==)
var_dump(5 !== "5");
// Output: bool(true)


// Spaceship Operator (<=>)
// Return -1, 0, or 1 based on comparison.

echo (2 <=> 3) . "\n";
// Output: -1

echo (3 <=> 3) . "\n";
// Output: 0

echo (3 <=> 2) . "\n";
// Output: 1


// ========================================
// 7. Logical Operators
// ========================================

$a = true;
$b = false;

// AND - Both conditions must be true
var_dump($a && $b);
// Output: bool(false)

// OR - At least one condition must be true
var_dump($a || $b);
// Output: bool(true)

// NOT - Reverse a boolean value
var_dump(!$a);
// Output: bool(false)


// ========================================
// 8. Ternary Operators
// ========================================

// Syntax:
// condition ? value_if_true : value_if_false

$name = "";

echo ($name ? $name : "Unknown") . "\n";
// Output: Unknown

$name = "Khin";

echo ($name ? $name : "Unknown") . "\n";
// Output: Khin


// Short Ternary Operator (?:)
// True ဖြစ်တဲ့အခါ ပြန်ပေးမယ့် Expression က
// Condition နဲ့ တူနေရင် အတိုချုံးရေးနိုင်ပါတယ်။

$name = "";

echo ($name ?: "Unknown") . "\n";
// Output: Unknown

$name = "Khin";

echo ($name ?: "Unknown") . "\n";
// Output: Khin


// Using isset() with Ternary Operator

echo (isset($n) ? $n : "Unknown") . "\n";
// Output: Unknown


// ========================================
// 9. Null Coalescing Operator (??)
// ========================================

// Variable ရှိပြီး NULL မဟုတ်ရင်
// မူလတန်ဖိုးကို ပြန်ပေးပါတယ်။

// Variable မရှိရင် (သို့) NULL ဖြစ်နေရင်
// Default value ကို ပြန်ပေးပါတယ်။

$num = 3;

echo ($num ?? "Undefined") . "\n";
// Output: 3

$unknown = null;

echo ($unknown ?? "Undefined") . "\n";
// Output: Undefined


// ========================================
// 10. Control Structures - switch
// ========================================

// switch က case value တွေကို
// Loose Comparison (==) နဲ့ နှိုင်းယှဉ်ပါတယ်။

$day = date("D");

echo $day . "\n";
// Example Output: Tue

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


// ========================================
// 11. Control Structures - match
// ========================================

// match ကို PHP 8.0+ မှာ အသုံးပြုနိုင်ပါတယ်။
// Strict Comparison (===) နဲ့ စစ်ပါတယ်။
// match က result ကို return ပြန်ပေးပါတယ်။

$result = match ($day) {
    "Sat", "Sun" => "Weekend",
    "Fri" => "TGIF",
    default => "Weekday",
};

echo $result . "\n";


// ========================================
// 12. Loop Structures
// ========================================

// ----------------------------------------
// 12.1 While Loop
// ----------------------------------------

// Condition မှန်နေသရွေ့ Loop အလုပ်လုပ်ပါတယ်။
// Condition ကို အရင်စစ်ပြီးမှ execute လုပ်ပါတယ်။

$i = 1;

while ($i <= 5) {
    echo $i . "\n";
    $i++;
}

// Output: 1 2 3 4 5


// ----------------------------------------
// 12.2 Do-While Loop
// ----------------------------------------

// Code ကို အနည်းဆုံး တစ်ကြိမ် execute လုပ်ပြီးမှ
// Condition ကို စစ်ပါတယ်။

$i = 1;

do {
    echo $i . "\n";
    $i++;
} while ($i <= 5);

// Output: 1 2 3 4 5


// ----------------------------------------
// 12.3 For Loop
// ----------------------------------------

// Initialization, Condition, Increment
// တို့ကို တစ်နေရာတည်းမှာ ရေးနိုင်ပါတယ်။

for ($i = 1; $i <= 5; $i++) {
    echo $i . "\n";
}

// Output: 1 2 3 4 5


// ----------------------------------------
// 12.4 Foreach Loop
// ----------------------------------------

// Array ထဲက Element တစ်ခုချင်းစီကို
// Loop ပတ်ပြီး အသုံးပြုနိုင်ပါတယ်။

$fruits = ["Apple", "Banana", "Cherry"];

// Access values
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

// Output:
// Apple
// Banana
// Cherry


// Access keys and values
$user = [
    "name" => "Alice",
    "age" => 25,
    "city" => "Mandalay",
];

foreach ($user as $key => $value) {
    echo "$key: $value\n";
}

// Output:
// name: Alice
// age: 25
// city: Mandalay


// ----------------------------------------
// 12.5 Break and Continue
// ----------------------------------------

// break - Loop ကို ချက်ချင်း ရပ်တန့်ပါတယ်။

for ($i = 1; $i <= 5; $i++) {
    if ($i === 3) {
        break;
    }

    echo $i . "\n";
}

// Output: 1 2


// continue - လက်ရှိ iteration ကို ကျော်ပြီး
// နောက် iteration ကို ဆက်လုပ်ပါတယ်။

for ($i = 1; $i <= 5; $i++) {
    if ($i === 3) {
        continue;
    }

    echo $i . "\n";
}

// Output: 1 2 4 5

