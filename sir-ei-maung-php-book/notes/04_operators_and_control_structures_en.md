# PHP Learning Journey — Operators & Control Structures (English)

Based on handwritten study notes (20 October 2026) and `06_operatores_&_controlStructures.php`. Corrections and extra learning points are labeled.

## 1. Arithmetic and concatenation

| Operator | Purpose | Example |
|---|---|---|
| `+` | Addition | `5 + 2` → `7` |
| `-` | Subtraction | `5 - 2` → `3` |
| `*` | Multiplication | `5 * 2` → `10` |
| `/` | Division | `5 / 2` → `2.5` |
| `%` | Remainder (modulo) | `5 % 2` → `1` |
| `**` | Exponentiation | `6 ** 2` → `36` |
| `.` | String concatenation | `"Hello" . " World"` |

In JavaScript, `+` can join strings; in PHP, `.` joins strings.

```php
$greet = "Welcome";
$person = "Khin";
echo $greet . " " . $person . "\n";
echo "$greet and $person\n"; // Variable interpolation in double quotes

$data = ["apple", "orange"];
echo $data[0] . " and " . $data[1] . "\n";
echo $data[0], " and ", $data[1], "\n"; // echo accepts multiple arguments
```

**Correction:** `echo $data;` triggers an *Array to string conversion* warning. Use `print_r($data)` for inspection, or access elements. `$data[2]` is undefined because the two valid indexes are `0` and `1`.

## 2. Comments

```php
// Single-line comment
# Another single-line comment
/* A multi-line
   comment */
```

## 3. Assignment and increment/decrement

`=` assigns. Compound assignment operators include `+=`, `-=`, `*=`, `/=`, and `.=` (append a string).

```php
$x = 10;
$x += 5;       // 15
$text = "Hi";
$text .= "!"; // "Hi!"
```

`$x++` returns the old value before incrementing; `++$x` increments first and returns the new value. `--` works similarly for decrementing.

```php
$x = 2;
$y = $x++; // x = 3, y = 2

$p = 1;
$q = ++$p; // p = 2, q = 2
```

## 4. Comparison operators

| Operator | Meaning |
|---|---|
| `==` | Equal after type juggling if applicable |
| `!=` or `<>` | Not equal |
| `===` | Identical (same value **and** type) |
| `!==` | Not identical |
| `<`, `>`, `<=`, `>=` | Ordering comparisons |
| `<=>` | Spaceship: negative / zero / positive according to comparison |

```php
var_dump(5 == "5");  // bool(true)
var_dump(5 === "5"); // bool(false)
var_dump(5 !== "5"); // bool(true)

echo (2 <=> 3) . "\n"; // -1
echo (3 <=> 3) . "\n"; // 0
echo (3 <=> 2) . "\n"; // 1
```

**Correction:** Not-identical is `!==`, not `!===`. The spaceship operator indicates less than, equal to, or greater than; do not assume every comparison always returns exactly `-1` or `1` outside these simple examples.

**Extra:** Use parentheses when combining comparisons with concatenation, to make evaluation order clear.

## 5. Logical operators

- `!$a`: NOT
- `$a && $b` / `$a and $b`: AND
- `$a || $b` / `$a or $b`: OR
- `$a xor $b`: true when exactly one side is truthy

```php
$isStudent = true;
$hasCard = false;
var_dump($isStudent && $hasCard); // false
var_dump($isStudent || $hasCard); // true
var_dump($isStudent xor $hasCard); // true
```

**Extra:** `and`/`or` have different precedence from `&&`/`||`, especially with assignment. Prefer `&&` and `||` in most conditions.

## 6. Ternary operator (`? :`)

```php
$age = 20;
$message = $age >= 18 ? "Adult" : "Minor";

$name = "";
echo $name ? $name : "Unknown"; // Unknown
echo $name ?: "Unknown";        // Unknown (short ternary)
```

Ternary chooses between two expressions based on truthiness. The shorthand `?:` uses the left value when truthy, otherwise the fallback. An undefined variable on the left of a ternary can trigger a warning; `isset()` can guard it.

## 7. Null coalescing (`??`)

```php
$name = null;
echo $name ?? "Unknown"; // Unknown

$age = 0;
echo $age ?? 18; // 0: zero is not null

// Extra: PHP 7.4+
$name ??= "Guest";
```

`??` uses the left operand if it is defined and not `null`; otherwise it evaluates the right operand. Unlike `?:`, it does **not** replace `0`, `false`, or `""` merely because they are falsy. It is similar to `isset($name) ? $name : "Unknown"`.

## 8. Control structures

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

PHP accepts `elseif` and `else if` in brace syntax; JavaScript uses `else if`. In PHP's colon/`endif` alternative syntax, use `elseif`.

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

`switch` uses loose (`==`) comparisons. `break` prevents falling through to later cases. **Correction from your code:** `date("D")` returns `"Fri"`, not `"fri"`.

### match (PHP 8+)

```php
$day = date("D");
$result = match ($day) {
    "Sat", "Sun" => "Weekend",
    "Fri" => "TGIF",
    default => "Weekday",
};
echo $result;
```

`match` uses strict (`===`) comparison, returns a value, does not fall through, and does not need `break`. Without a matching arm or `default`, it throws `UnhandledMatchError`.

## 9. Loops (listed in your notes; examples added)

```php
$i = 1;
while ($i <= 3) { echo $i++; } // 123

do { echo $i--; } while ($i > 1); // 432

for ($n = 1; $n <= 3; $n++) { echo $n; } // 123

$fruits = ["apple", "orange"];
foreach ($fruits as $fruit) { echo $fruit . "\n"; }
```

`while` checks before each iteration; `do...while` runs at least once. `for` suits counted loops; `foreach` is convenient for arrays.

## 10. Additional reminders

- `"\n"` displays a new line in terminal output; use `<br>` for a browser-rendered HTML line break.
- `echo` with commas passes separate arguments; `.` concatenates strings.
- Keep comparison expressions in parentheses when combining with output: `echo (2 <=> 3) . "\n";`.
- `var_dump()` is useful for seeing both values and types, especially `true`/`false`.

**Practice prompt:** Write a script that uses `??` for a default username, `match` to label a weekday, and `foreach` to display a list of hobbies.
