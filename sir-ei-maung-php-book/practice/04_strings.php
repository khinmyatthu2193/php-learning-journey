
<?php

// ========================================
// 1. Basic String Functions
// ========================================

// Get string length (bytes)
echo strlen("Hello World") . "\n";
// Output: 11

// Count words
echo str_word_count("Hello World") . "\n";
// Output: 2

// Reverse a string
echo strrev("Hello World") . "\n";
// Output: dlroW olleH

// Find the position of a substring
echo strpos("Hello World", "World") . "\n";
// Output: 6


// ========================================
// 2. String Replacement and Repetition
// ========================================

// Replace a word in a string
// အစီအစဉ်: ရှာမည့်စာလုံး၊ အစားထိုးမည့်စာလုံး၊ မူရင်း String
echo str_replace("World", "PHP", "Hello World") . "\n";
// Output: Hello PHP

// Repeat a string
echo str_repeat("Hello", 3) . "\n";
// Output: HelloHelloHello

// Repeat a character
echo str_repeat("-", 10) . "\n";
// Output: ----------


// ========================================
// 3. String Case Conversion
// ========================================

// Convert to uppercase
echo strtoupper("Hello World") . "\n";
// Output: HELLO WORLD

// Convert to lowercase
echo strtolower("Hello World") . "\n";
// Output: hello world

// Capitalize the first character
echo ucfirst("hello world") . "\n";
// Output: Hello world

// Capitalize the first letter of each word
echo ucwords("hello world") . "\n";
// Output: Hello World


// ========================================
// 4. Removing Whitespace
// ========================================

// Remove whitespace from both sides
echo trim("   Hello World   ") . "\n";
// Output: Hello World

// Remove whitespace from the left
echo ltrim("   Hello World   ") . "\n";
// Output: Hello World

// Remove whitespace from the right
echo rtrim("   Hello World   ") . "\n";
// Output: "   Hello World"


// ========================================
// 5. String Padding
// ========================================

// Add padding to the right (default)
echo str_pad("Hello", 10, "-") . "\n";
// Output: Hello-----

// Add padding to the left
echo str_pad("Hello", 10, "-", STR_PAD_LEFT) . "\n";
// Output: -----Hello

// Add padding to both sides
echo str_pad("Hello", 10, "-", STR_PAD_BOTH) . "\n";
// Output: --Hello---

// Explicitly add padding to the right
echo str_pad("Hello", 10, "-", STR_PAD_RIGHT) . "\n";
// Output: Hello-----


// ========================================
// 6. Substrings and UTF-8
// ========================================

// Extract part of a string
// substr() ကို String ထဲက လိုချင်တဲ့အပိုင်း
// ဖြတ်ထုတ်ရန် အသုံးပြုနိုင်ပါတယ်။

$str = "Hello World";

echo substr($str, 0, 5) . "\n";
// Output: Hello

echo substr($str, 6) . "\n";
// Output: World

// UTF-8 string length
// strlen() က character အရေအတွက်မဟုတ်ဘဲ
// byte အရေအတွက်ကို ပြန်ပေးပါတယ်။

echo strlen("ကခဂ") . "\n";
// Output: 9 (3 Burmese characters × 3 bytes)

// Count Unicode characters using mb_strlen()
// Requires the mbstring extension.

echo mb_strlen("ကခဂ", "UTF-8") . "\n";
// Output: 3
