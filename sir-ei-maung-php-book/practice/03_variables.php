
<?php

// ========================================
// 1. Variables and var_dump()
// ========================================

// Undefined variable
var_dump($var);
// Warning: Undefined variable $var
// Output: NULL

// Integer
$var = 123;
var_dump($var);
// Output: int(123)

// String
$var = "abc";
var_dump($var);
// Output: string(3) "abc"


// ========================================
// 2. Global Variable Scope
// ========================================

$name = "Bob";

function hello()
{
    // Function ထဲမှာ global variable ကို
    // အသုံးပြုချင်ရင် global keyword သုံးရပါတယ်။
    global $name;

    echo "Hello $name\n";
}

hello();
// Output: Hello Bob


// ========================================
// 3. Function and Block Scope
// ========================================

function hi()
{
    if (true) {
        $name1 = "Alice";
    }

    // PHP မှာ if block က separate scope မဖန်တီးပါ။
    // ဒါကြောင့် $name1 ကို ဒီနေရာမှာ သုံးနိုင်ပါတယ်။
    echo $name1 . "\n";
}

hi();
// Output: Alice


// ========================================
// 4. Checking Variables with isset()
// ========================================

// isset() က variable ရှိပြီး NULL မဟုတ်တာကို စစ်ပါတယ်။
// true ဖြစ်ရင် echo က 1 ပြပြီး
// false ဖြစ်ရင် ဘာမှမပြပါ။

echo isset($name) . "\n";
// Output: 1

echo isset($unknown) . "\n";
// Output: (empty line)


// ========================================
// 5. Constants with define()
// ========================================

// Constant တွေကို define() နဲ့ ကြေညာနိုင်ပါတယ်။
// Constant name တွေမှာ $ မလိုအပ်ပါ။

define("PI", 3.14159);
define("MIN", 1);
define("MAX", 10);

echo PI . "\n";
// Output: 3.14159

echo MAX . "\n";
// Output: 10

// Constants cannot be reassigned.
// MAX = 20; // Error

// This works because $MAX is a variable,
// not the constant MAX.
$MAX = 20;

echo $MAX . "\n";
// Output: 20
