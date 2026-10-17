# Chapter 4 — Strings & Arrays (English Notes)

> **Source:** My handwritten Chapter 4 notes (notebook pp. 7–9), `04_strings.php`, and `05_array.php`. These are study notes based on my learning materials, **not** a verified transcription of the full book chapter.

## 1. Strings

A **string** is text stored between quotes. PHP supports single and double quoted strings.

```php
<?php
$name = "Khin";
echo 'Hello $name'; // Hello $name
echo "Hello $name"; // Hello Khin
```

- **Single quotes** normally treat `$name` as literal text.
- **Double quotes** interpolate variables, so their values appear in the output.
- A string can also be joined with another string using `.` (concatenation).

```php
echo 'Hello ' . $name; // Hello Khin
```

### Common string functions

| Function | Purpose | Example result |
|---|---|---|
| `strlen($text)` | String length in **bytes** | `strlen("Hello World")` → `11` |
| `str_word_count($text)` | Count words (best suited to simple Latin-script text) | `str_word_count("Hello World")` → `2` |
| `strrev($text)` | Reverse bytes of a string | `strrev("Hello")` → `olleH` |
| `strpos($text, $search)` | Find starting position; `false` if missing | `strpos("Hello World", "World")` → `6` |
| `substr($text, $start, $length)` | Extract a substring | `substr("Hello World", 0, 5)` → `Hello` |
| `str_replace($find, $replace, $text)` | Search and replace | `str_replace("World", "PHP", "Hello World")` → `Hello PHP` |
| `str_repeat($text, $count)` | Repeat text | `str_repeat("Hi", 3)` → `HiHiHi` |
| `strtoupper()` / `strtolower()` | Change case | `HELLO` / `hello` |
| `ucfirst()` / `ucwords()` | Capitalize first character / each word | `Hello world` / `Hello World` |
| `trim()` / `ltrim()` / `rtrim()` | Remove surrounding / leading / trailing whitespace | `trim("  Hi  ")` → `Hi` |
| `str_pad()` | Pad text to a target length | `str_pad("Hi", 5, "-")` → `Hi---` |

```php
$text = "Hello World";
echo substr($text, 6);                         // World
echo str_pad("Hello", 10, "-", STR_PAD_LEFT); // -----Hello
```

### UTF-8 note

`strlen()` counts **bytes**, not Unicode characters. In your code:

```php
echo strlen("ကခဂ");             // 9 bytes in UTF-8
echo mb_strlen("ကခဂ", "UTF-8"); // 3 characters
```

`mb_strlen()` requires the PHP **mbstring** extension. Byte-oriented functions such as `strrev()` and `substr()` may not behave as expected for Burmese text; use appropriate multibyte functions when working with Unicode.

## 2. Arrays

An **array** holds multiple values. Your notes group arrays into two common forms: **indexed (numeric)** and **associative**. PHP arrays can actually use both integer and string keys.

### Indexed arrays

```php
$users = array("Alice", "Bob", "Charlie"); // Traditional syntax
$fruits = ["Apple", "Banana", "Cherry"];   // Short syntax (PHP 5.4+)

echo $users[0];  // Alice
echo $fruits[1]; // Banana
```

When automatically assigned, numeric indexes normally start at `0`. `echo $fruits` does **not** print the contents: it causes an *Array to string conversion* warning. Use:

```php
print_r($fruits); // Shows keys and values
var_dump($fruits); // Shows types and detailed values
```

### Associative arrays

Associative arrays use meaningful string keys.

```php
$user = [
    "name" => "Alice",
    "age" => 25,
    "email" => "alice@example.com"
];
echo $user["name"]; // Alice
```

### Adding and changing elements

```php
$fruits = ["Apple", "Banana", "Cherry"];
$fruits[] = "Durian";      // New index 3
$fruits[5] = "Elderberry"; // Explicit index 5; index 4 is not created
$fruits[1] = "Orange";     // Update an existing element
```

`[]` appends at the next available integer key; PHP does not necessarily fill gaps in indexes.

### Array destructuring

Destructuring extracts array values into variables. Your code demonstrates named-key destructuring (PHP 7.1+):

```php
$user = ["name" => "Alice", "age" => 25];
list("name" => $name, "age" => $age) = $user;
// Or:
["name" => $name, "age" => $age] = $user;
echo $name; // Alice
```

### Copying arrays

Normal assignment copies a PHP array by value (copy-on-write behavior).

```php
$oldArray = [1, 2, 3];
$newArray = $oldArray;
$newArray[0] = 100;
echo $oldArray[0]; // 1
echo $newArray[0]; // 100
```

## 3. Useful array functions

| Function | What it does |
|---|---|
| `count($a)` | Number of elements |
| `max($a)` / `min($a)` | Largest / smallest value |
| `is_array($a)` | Check whether a value is an array |
| `in_array($value, $a)` | Check if a value is present |
| `array_search($value, $a)` | Find its key (or `false` if absent) |
| `array_sum($a)` | Sum numeric values |
| `array_keys($a)` / `array_values($a)` | Get keys / values as arrays |

```php
$nums = [1, 2, 3, 4, 5];
echo count($nums);          // 5
echo array_sum($nums);      // 15
echo array_search(4, $nums); // 3
var_dump(in_array(3, $nums)); // bool(true)
```

**Important:** `array_search()` may return key `0`, so check `!== false` instead of relying on truthiness.

## 4. Modifying arrays

```php
$nums = [1, 2, 3, 4, 5];
array_push($nums, 6);       // [1, 2, 3, 4, 5, 6]
array_pop($nums);           // [1, 2, 3, 4, 5]
array_shift($nums);         // [2, 3, 4, 5]
array_unshift($nums, 0);    // [0, 2, 3, 4, 5]
array_splice($nums, 2, 1);  // [0, 2, 4, 5]
$reversed = array_reverse($nums); // [5, 4, 2, 0]
// $nums is still [0, 2, 4, 5]
```

- `array_push()` / `array_pop()` work at the **end**.
- `array_unshift()` / `array_shift()` work at the **beginning**.
- `array_splice()` changes the original array.
- `array_reverse()` returns a reversed array without changing the original.

## 5. Sorting arrays

```php
$numbers = [4, 2, 5, 1, 3];
sort($numbers);  // [1, 2, 3, 4, 5]
rsort($numbers); // [5, 4, 3, 2, 1]

$scores = ["Alice" => 80, "Bob" => 95, "Charlie" => 70];
asort($scores); // Sort by value, preserve keys
ksort($scores); // Sort by key
```

`sort()` and `rsort()` reindex numeric keys. Your code also uses `usort()` with the spaceship operator `<=>` to sort students by age:

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

## 6. Converting between strings and arrays

```php
$input = "A quick brown fox jumps over the lazy dog";
$words = explode(" ", $input); // String → array
$output = implode(" ", $words); // Array → string
echo $output;
```

## Quick review

- Single quotes: literal `$variable`; double quotes: interpolation.
- `strlen()` measures bytes; `mb_strlen()` can count UTF-8 characters.
- Indexed arrays use numeric keys; associative arrays commonly use string keys.
- `print_r()` displays array structure; `var_dump()` includes types.
- `[]` appends a value; normal array assignment creates an independent value.
- Most sorting functions modify the original array.

## Self-test ✍️

1. What will `echo 'Hi $name';` display if `$name = "Khin";`?
2. Why can `strlen("ကခဂ")` return `9` while `mb_strlen("ကခဂ", "UTF-8")` returns `3`?
3. What is the difference between `print_r()` and `var_dump()`?
4. What key is assigned when you append to `[0 => "A", 5 => "B"]` using `[]`?
5. What happens to the original array after `$copy = $original; $copy[0] = 99;`?
6. Which function sorts associative array **values** while preserving their keys?
7. How are `explode()` and `implode()` different?
8. Predict the output:

```php
$items = ["A", "B", "C"];
$items[] = "D";
unset($items[1]);
print_r($items);
```
