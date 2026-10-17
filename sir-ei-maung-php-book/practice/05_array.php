<?php

// ========================================
// 1. Indexed Arrays (Numeric Arrays)
// ========================================

// Numeric index တွေကို အသုံးပြုတဲ့ Array ဖြစ်ပါတယ်။
// Index တွေက ပုံမှန်အားဖြင့် 0 ကနေ စပါတယ်။

// Traditional syntax
$users = array("Alice", "Bob", "Charlie");

echo $users[0] . "\n";
// Output: Alice

// echo $users;
// Warning: Array to string conversion

// Short array syntax (PHP 5.4+)
$fruits = ["Apple", "Banana", "Cherry"];

echo $fruits[1] . "\n";
// Output: Banana

// Display the entire array
print_r($fruits);

// Display array types and values
var_dump($fruits);


// ========================================
// 2. Associative Arrays
// ========================================

// String key တွေကို အသုံးပြုပြီး
// data တွေကို သိမ်းဆည်းနိုင်ပါတယ်။

$user = [
    "name" => "Alice",
    "age" => 25,
    "email" => "alice@example.com",
];

echo $user["name"] . "\n";
// Output: Alice

print_r($user);
var_dump($user);


// ========================================
// 3. Adding Array Elements
// ========================================

// PHP မှာ ရှိပြီးသား Array ထဲကို
// Element အသစ်တွေ ထပ်ထည့်နိုင်ပါတယ်။

// Index မသတ်မှတ်ရင် PHP က
// နောက်ထပ် integer index ကို သတ်မှတ်ပေးပါတယ်။

$fruits[] = "Durian";
// Index: 3

// Index ကို ကိုယ်တိုင် သတ်မှတ်နိုင်ပါတယ်။
$fruits[5] = "Elderberry";
// Index: 5

print_r($fruits);

// Note:
// JavaScript မှာလည်း push() နဲ့
// array ထဲကို element အသစ် ထည့်နိုင်ပါတယ်။


// ========================================
// 4. Array Destructuring
// ========================================

// Array ထဲက value တွေကို
// variable တွေထဲ ခွဲထုတ်သိမ်းဆည်းနိုင်ပါတယ်။

$user = [
    "name" => "Alice",
    "age" => 25,
];

// Using list() with named keys (PHP 7.1+)
list("name" => $name, "age" => $age) = $user;

echo $name . "\n";
// Output: Alice

// Short destructuring syntax (PHP 7.1+)
["name" => $name, "age" => $age] = $user;

echo $name . "\n";
// Output: Alice


// ========================================
// 5. Copying Arrays
// ========================================

// Array တစ်ခုကို နောက် Array တစ်ခုထဲ
// assignment (=) နဲ့ ကူးယူနိုင်ပါတယ်။

$oldArray = [1, 2, 3];
$newArray = $oldArray;

print_r($newArray);

// PHP Array တွေက ပုံမှန်အားဖြင့်
// value အနေနဲ့ copy လုပ်ပါတယ်။

$newArray[0] = 100;

echo $oldArray[0] . "\n";
// Output: 1

echo $newArray[0] . "\n";
// Output: 100


// ========================================
// 6. Common Array Functions
// ========================================

$nums = [1, 2, 3, 4, 5];

// Get the number of elements
echo count($nums) . "\n";
// Output: 5

// Get maximum value
echo max($nums) . "\n";
// Output: 5

// Get minimum value
echo min($nums) . "\n";
// Output: 1

// Check whether a variable is an array
var_dump(is_array($nums));
// Output: bool(true)

// Check whether a value exists
var_dump(in_array(3, $nums));
// Output: bool(true)

// Find the index of a value
echo array_search(4, $nums) . "\n";
// Output: 3

// Calculate the sum
echo array_sum($nums) . "\n";
// Output: 15


// ========================================
// 7. Modifying Arrays
// ========================================

$nums = [1, 2, 3, 4, 5];

// Add an element to the end
array_push($nums, 6);
// [1, 2, 3, 4, 5, 6]

// Remove the last element
array_pop($nums);
// [1, 2, 3, 4, 5]

// Remove the first element
array_shift($nums);
// [2, 3, 4, 5]

// Add an element to the beginning
array_unshift($nums, 0);
// [0, 2, 3, 4, 5]

// Remove one element at index 2
array_splice($nums, 2, 1);
// [0, 2, 4, 5]

// Reverse the array
$reversed = array_reverse($nums);

print_r($reversed);
// [5, 4, 2, 0]

// Original array remains unchanged
print_r($nums);
// [0, 2, 4, 5]


// ========================================
// 8. Array Keys and Values
// ========================================

$students = [
    ["name" => "Tom", "age" => 25],
    ["name" => "Bob", "age" => 30],
    ["name" => "Charlie", "age" => 35],
];

// Get all keys
$keys = array_keys($students);

print_r($keys);
// [0, 1, 2]

// Get all values
$values = array_values($students);

print_r($values);


// ========================================
// 9. Sorting Arrays
// ========================================

// Sorting function အများစုက
// မူရင်း Array ကို တိုက်ရိုက် ပြောင်းလဲပါတယ်။

$numbers = [4, 2, 5, 1, 3];

// Sort values in ascending order
sort($numbers);

print_r($numbers);
// [1, 2, 3, 4, 5]

// Sort values in descending order
rsort($numbers);

print_r($numbers);
// [5, 4, 3, 2, 1]


// Sort values while preserving keys
$scores = [
    "Alice" => 80,
    "Bob" => 95,
    "Charlie" => 70,
];

asort($scores);

print_r($scores);
// Charlie => 70, Alice => 80, Bob => 95


// Sort by keys
ksort($scores);

print_r($scores);
// Alice => 80, Bob => 95, Charlie => 70


// Sort students by age (ascending)
usort($students, function ($a, $b) {
    return $a["age"] <=> $b["age"];
});

print_r($students);


// ========================================
// 10. explode() and implode()
// ========================================

// explode() က String ကို Array အဖြစ်
// ခွဲထုတ်ပေးပါတယ်။

$input = "A quick brown fox jumps over the lazy dog";

$words = explode(" ", $input);

print_r($words);
// ["A", "quick", "brown", "fox", "jumps",
//  "over", "the", "lazy", "dog"]


// implode() က Array ကို String အဖြစ်
// ပြန်လည် ပေါင်းစည်းပေးပါတယ်။

$output = implode(" ", $words);

echo $output . "\n";
// Output: A quick brown fox jumps over the lazy dog
