# PHP Learning Journey — Chapter 6: Functions (English)

> Companion learning notes (general PHP reference, not a transcription of Sir Ei Maung's book).

## 1. What is a function?
A function is a reusable block of code that performs a task. Define it once, call it many times.

```php
function greet($name) {
    echo "Hello, $name!\n";
}
greet("Khin");
```

## 2. Syntax, parameters and arguments
```php
function add($a, $b) { // $a, $b are parameters
    return $a + $b;
}
echo add(2, 3); // 2, 3 are arguments; prints 5
```

## 3. `return` vs `echo`
- `echo` displays output; it does not return a value.
- `return` sends a value to the caller and stops execution of the function.
- A function with no `return` returns `null`.

```php
function sum(int $a, int $b): int {
    return $a + $b;
}
$result = sum(4, 6);
echo $result; // 10
```

## 4. Default and named arguments
```php
function greetUser(string $name = "Guest"): string {
    return "Hello, $name";
}
echo greetUser(); // Hello, Guest
echo greetUser(name: "Khin"); // Hello, Khin (PHP 8+)
```

## 5. Scope
Function variables are normally local. Passing values explicitly is usually clearer than using `global`.

```php
$name = "Alice";
function demo(): void {
    $name = "Bob";
    echo $name; // Bob
}
demo();
echo $name; // Alice
```

## 6. Types and nullable values
PHP supports parameter and return types such as `int`, `string`, `bool`, `float`, `array`, `void`, and nullable types such as `?string`.

```php
function label(?string $name): string {
    return $name ?? "Guest";
}
echo label(null); // Guest
```

`declare(strict_types=1);` at the top of a PHP file makes scalar argument type checking stricter for calls made from that file.

## 7. Passing by value vs by reference
By default, changing a parameter inside a function does not change the caller's variable. Use `&` for pass-by-reference only when you intentionally need it.

```php
function increase(int &$number): void {
    $number++;
}
$x = 3;
increase($x);
echo $x; // 4
```

## 8. Anonymous and arrow functions
```php
$double = function ($n) { return $n * 2; };
$triple = fn($n) => $n * 3; // PHP 7.4+
echo $double(4); // 8
echo $triple(4); // 12
```
Arrow functions automatically capture variables from the surrounding scope by value.

## 9. Variadic arguments
```php
function total(int ...$numbers): int {
    return array_sum($numbers);
}
echo total(2, 3, 4); // 9
```

## 10. Built-in functions
Examples: `strlen("PHP")` returns 3, `count([1,2])` returns 2, `strtoupper("php")` returns `PHP`, and `array_sum([1,2,3])` returns 6.

## 11. Practical example
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

## 12. Common mistakes
- Forgetting to call the function: defining it alone does not execute it.
- Confusing `echo` with `return`.
- Expecting a local variable to be accessible outside its function.
- Passing the wrong number or type of arguments.
- Forgetting that `return` exits the function immediately.

## 13. Practice challenges
1. Write `isEven(int $n): bool` that returns whether a number is even.
2. Write `getFullName(string $first, string $last): string`.
3. Write `calculateAverage(float ...$scores): ?float` that returns `null` for no scores.
4. Rewrite an existing `if/elseif` block as a function and call it three times.

**Remember:** A function receives inputs (arguments), performs logic, and may return an output.
