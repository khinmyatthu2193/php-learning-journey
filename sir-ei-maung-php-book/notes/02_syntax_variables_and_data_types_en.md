# Chapter 3 — Syntax, Variables & Data Types 🐘

> Beginner-friendly bilingual PHP study notes based on **pages 28–38** of Sir Ei Maung's PHP book. Examples are rewritten for practice rather than copied verbatim.

---


## 1. PHP Inside HTML (pp. 28–29)

PHP code can be placed between HTML elements. PHP runs on the server and produces output that the browser can display.

```php
<h1>Home Page</h1>
<p>Total: <?php echo 1 + 2; ?></p>
```

**Browser displays:** `Home Page` and `Total: 3`.

**Remember:** The browser receives the generated HTML, not the original server-side PHP code. You can inspect the generated HTML using **View Page Source**.

## 2. PHP Tags, Statements, and Semicolons (pp. 28–30)

- `<?php` opens a PHP block.
- `?>` closes a PHP block when needed.
- A **statement** is an instruction PHP executes.
- Most PHP statements end with a semicolon (`;`).

```php
<?php
$first = 3;
$second = 5;
echo $first + $second;
```

**Output:** `8`

You can write PHP within HTML or place variables in one PHP block and use them in another.

## 3. `echo`, `print`, and Short Echo (pp. 29–30)

`echo` outputs text or values. `print` also outputs a value. The chapter introduces `print` as another output keyword.

```php
<?php
 echo "Hello";
 print " World";
?>
```

**Output:** `Hello World`

The short echo tag `<?= ... ?>` is a convenient alternative to `<?php echo ... ?>`.

```php
<?php $total = 8; ?>
<p>Total: <?= $total ?></p>
```

**Remember:** `<?= $total ?>` means “output the value of `$total`.”

## 4. Mixing PHP Conditions with HTML (pp. 31–33)

PHP can decide which HTML to send to the browser.

```php
<?php $hour = (int) date('G'); ?>
<p>
<?php
if ($hour < 6 || $hour > 18) {
    echo '<b>Night Time</b>';
} else {
    echo '<i>Day Time</i>';
}
?>
</p>
```

- `date()` gets a formatted date or time value.
- `||` means **OR**.
- `if` runs one branch when a condition is true; `else` handles the other case.
- PHP can output HTML tags such as `<b>` and `<i>`.

### Alternative syntax for templates

Instead of writing HTML tags inside `echo`, the chapter shows how to write HTML directly between PHP control statements:

```php
<?php $hour = (int) date('G'); ?>
<?php if ($hour < 6 || $hour > 18): ?>
    <b>Night Time</b>
<?php else: ?>
    <i>Day Time</i>
<?php endif; ?>
```

Here `:` starts a branch, and `endif;` finishes the conditional. The chapter also mentions alternative syntax for loops and `switch`.

A **template** combines presentation markup with dynamic data. The chapter names **Smarty, Twig, and Blade** as template-library examples.

## 5. Omitting the Closing PHP Tag (p. 34)

When a file contains only PHP code, you can leave off the final `?>`:

```php
<?php
$first = 3;
$second = 5;
echo $first + $second;
```

This is useful because accidental whitespace after a closing tag can become unwanted output.

## 6. Variables and Dynamic Types (pp. 29–30, 34–35)

A **variable** stores a value. PHP variable names begin with `$`, and you do not need a `var` or `let` keyword to declare one.

```php
<?php
$value = 123;
var_dump($value); // int(123)

$value = "abc";
var_dump($value); // string(3) "abc"
```

PHP is described as a **loosely typed language**: the same variable can hold different kinds of values at different times.

`var_dump()` displays a value's type and details. For an undefined variable, the chapter shows an undefined-variable warning and `NULL` output.

## 7. Variable Scope (pp. 35–37)

**Scope** describes where a variable is available.

### Global scope and function scope

```php
<?php
$name = "Bob";

function greet() {
    echo $name; // Undefined variable warning
}

greet();
```

A variable defined outside a function is not automatically available as a local variable inside it.

The chapter demonstrates the `global` keyword:

```php
<?php
$name = "Bob";

function greet() {
    global $name;
    echo $name;
}

greet(); // Bob
```

### Blocks and function scope

```php
<?php
function greet() {
    if (true) {
        $name = "Alice";
    }
    echo $name;
}

greet(); // Alice
```

The chapter shows that an `if` block does **not** create a separate variable scope in PHP. The variable remains available in the surrounding function after the block has executed.

## 8. Checking Variables with `isset()` (p. 37)

`isset()` checks whether a variable exists **and is not `null`**.

```php
<?php
var_dump(isset($name)); // bool(false)

$name = "Bob";
var_dump(isset($name)); // bool(true)
```

**Remember:** When you `echo` a boolean directly, `true` is displayed as `1` and `false` as an empty string. `var_dump()` makes the result easier to understand.

## 9. Constants with `define()` (pp. 37–38)

A **constant** is a named value that is not meant to be reassigned.

```php
<?php
define("MIN", 1);
define("MAX", 10);

echo MAX; // 10
```

- `define()` takes the constant name and its value.
- Constants in these examples do not start with `$`.
- Trying to assign a new value using `MAX = 20;` is invalid syntax.
- The chapter explains that constants defined this way are accessible in functions too.

## 10. PHP Data Types (p. 38)

The chapter groups PHP data types into three categories:

| Category | Types introduced | Basic meaning |
|---|---|---|
| Scalar | Boolean, Integer, Float, String | Single values |
| Compound | Array, Object | Structured values |
| Special | NULL, Resource | No value / special external resource |

### Scalar types

```php
<?php
$active = true;        // Boolean
$count = 10;          // Integer
$price = 12.5;        // Float
$title = "PHP";       // String
```

### Compound types

```php
<?php
$colors = ["red", "blue"]; // Array
$user = new stdClass();   // Object
```

### Special types

```php
<?php
$missing = null; // NULL
```

A **resource** is a special value used to represent certain external resources. The chapter introduces this concept without a practical resource example on the provided pages.

## 11. Quick Review — English

1. **PHP tags?** `<?php` and, when needed, `?>`.
2. **PHP in HTML?** PHP runs on the server and generates browser-readable output.
3. **Statement ending?** Usually `;`.
4. **Output keyword?** `echo` (or `print`).
5. **Short echo?** `<?= $value ?>`.
6. **Variable prefix?** `$`.
7. **Type inspection?** `var_dump()`.
8. **Global variable inside a function?** Use `global` in the chapter's example.
9. **Does `if` create a separate PHP variable scope?** No.
10. **Check a variable is set and non-null?** `isset()`.
11. **Create a constant?** `define()`.
12. **Three data type categories?** Scalar, Compound, Special.

---
