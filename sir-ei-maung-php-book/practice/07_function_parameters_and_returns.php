<?php

// ========================================
// 1. Basic Functions
// ========================================

// Function တွေမှာ parameter သတ်မှတ်ပြီး
// argument တွေကို pass လုပ်နိုင်ပါတယ်။

function add($a, $b)
{
    return $a + $b;
}

$result = add(1, 2);
echo $result . "\n";
// Output: 3

echo add(2, 2, 3) . "\n";
// Output: 4

// Argument မစုံရင် Error တက်နိုင်ပါတယ်။
// Argument ပိုသွားရင်တော့ ပုံမှန် User-defined
// Function တွေမှာ Error မတက်ပါဘူး။
// ပိုသွားတဲ့ Argument ကိုလည်း
// Function ထဲမှာ မသုံးထားရင် အလုပ်မလုပ်ပါဘူး။

// Return Statement
// တန်ဖိုးကို ပြန်ပေးချင်ရင် return ကို သုံးနိုင်ပါတယ်။
// return မပါရင် default အနေနဲ့ NULL ပြန်ပေးပါတယ်။


// ========================================
// 2. Default Parameters
// ========================================

// Parameter တွေမှာ default value
// သတ်မှတ်ထားလို့ ရပါတယ်။

function subtract($c, $d = 2)
{
    return $c - $d;
}

echo subtract(3) . "\n";
// Output: 1

echo subtract(5, 3) . "\n";
// Output: 2


// ========================================
// 3. Rest Parameters (Variadic Functions)
// ========================================

// ... (Variadic Parameter) ကို အသုံးပြုပြီး
// Argument အများကြီးကို လက်ခံနိုင်ပါတယ်။

// ပိုလာတဲ့ Argument တွေကို
// Array အဖြစ် စုစည်းပေးပါတယ်။

function rest($e, ...$f)
{
    return $e + array_sum($f);
}

echo rest(1, 2, 3, 4, 5) . "\n";
// Output: 15


// ========================================
// 4. Type Hinting
// ========================================

// Syntax:
// function name(type $parameter): returnType {
//     // Code
// }

// Code ဖတ်ရလွယ်ကူစေပြီး
// Function က လက်ခံမယ့် Data Type နဲ့
// Return ပြန်ပေးမယ့် Type ကို သတ်မှတ်နိုင်ပါတယ်။

// Type မကိုက်ညီရင် TypeError တက်နိုင်တာကြောင့်
// Error ကို ပိုပြီး သိသာစေပါတယ်။

function multiply(int $a, int $b): int
{
    return $a * $b;
}

echo multiply(3, 4) . "\n";
// Output: 12
