# PHP Learning Journey — Chapter 7: Object-Oriented Programming (OOP)

> Study notes | PHP 8+ | Based on our Chapter 7 lesson (not a page-by-page transcription of the book).

## 1. What is OOP?
Object-Oriented Programming groups **data** (properties) and **behavior** (methods) in objects. A **class** is a blueprint; an **object** is an instance created with `new`.

```php
class Student {
    public string $name = "Guest";
    public function introduce(): string {
        return "Hello, I'm " . $this->name;
    }
}

$student = new Student();
$student->name = "Khin";
echo $student->introduce(); // Hello, I'm Khin
```

## 2. Classes, objects, properties, methods
- `class Student` declares a blueprint.
- `new Student()` creates an object.
- `$student->name` accesses a **property**.
- `$student->introduce()` calls a **method**.
- PHP uses `->` for object member access; JavaScript commonly uses `.`.
- Each object has its own instance-property values.

```php
$a = new Student();
$b = new Student();
$a->name = "Alice";
$b->name = "Bob";
echo $a->name; // Alice
```

## 3. `$this`
Inside a **non-static** method, `$this` refers to the current object.

```php
class Car {
    public string $brand = "Toyota";
    public function describe(): string {
        return $this->brand;
    }
}
```

> Common mistake: `$this->name` is correct for a property named `name`; `$this->$name` means a dynamically named property.

## 4. Constructors
`__construct()` runs automatically when creating an object and is often used to initialize properties.

```php
class Student {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$student = new Student("Khin", 20);
```

**PHP 8+ constructor property promotion** makes this shorter:

```php
class Student {
    public function __construct(
        public string $name,
        public int $age
    ) {}
}
```

## 5. Access modifiers and encapsulation
| Modifier | Same class | Child class | Outside class |
|---|---|---|---|
| `public` | Yes | Yes | Yes |
| `protected` | Yes | Yes | No |
| `private` | Yes | Not directly | No |

Encapsulation means keeping related state and behavior together and controlling how state is changed.

```php
class BankAccount {
    private float $balance = 0;

    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance(): float {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
echo $account->getBalance(); // 100
// $account->balance = 500; // Error: private property
```

## 6. Four OOP pillars
1. **Encapsulation** — control access to internal state.
2. **Inheritance** — reuse and extend a parent class via `extends`.
3. **Polymorphism** — different objects respond to the same contract in their own way.
4. **Abstraction** — expose essential operations while hiding implementation details.

## 7. Inheritance and method overriding

```php
class Person {
    public function greet(): string { return "Hello"; }
}

class Student extends Person {
    public function greet(): string { return "Hello from student"; }
}

echo (new Student())->greet(); // Hello from student
```

A child class inherits accessible members and may override suitable parent methods. PHP classes support single class inheritance.

## 8. Interfaces and polymorphism
An interface defines methods implementing classes must provide.

```php
interface Notification {
    public function send(): string;
}

class EmailNotification implements Notification {
    public function send(): string { return "Sending email"; }
}

class SMSNotification implements Notification {
    public function send(): string { return "Sending SMS"; }
}

function notify(Notification $notification): void {
    echo $notification->send() . "
";
}

notify(new EmailNotification());
notify(new SMSNotification());
```

## 9. Static methods and `::`
Static members belong to the class, not a particular instance.

```php
class Calculator {
    public static function add(int $a, int $b): int {
        return $a + $b;
    }
}
echo Calculator::add(10, 20); // 30
```

- `->` accesses instance members.
- `::` accesses static members and class constants.
- `$this` is not available in static methods.

## 10. Practical example: Laptop rental

```php
class Laptop {
    public function __construct(
        public string $serialNumber,
        private bool $isAvailable = true
    ) {}

    public function lend(): string {
        if (!$this->isAvailable) {
            return "Laptop is already lent.";
        }
        $this->isAvailable = false;
        return "Laptop lent successfully.";
    }

    public function returnLaptop(): void {
        $this->isAvailable = true;
    }

    public function isAvailable(): bool {
        return $this->isAvailable;
    }
}

$laptop = new Laptop("MIIT-001");
echo $laptop->lend() . "
"; // Laptop lent successfully.
echo $laptop->lend() . "
"; // Laptop is already lent.
$laptop->returnLaptop();
echo $laptop->lend() . "
"; // Laptop lent successfully.
```

## 11. Common mistakes
- Using `$student.name` instead of `$student->name`.
- Forgetting `new` to instantiate a class.
- Confusing `$this->name` with `$this->$name`.
- Trying to access `private` properties from outside.
- Confusing instance `->` and static `::` access.
- Overusing classes for tiny scripts that work fine with functions.

## 12. Extra concepts to learn next (not required for the first OOP session)
- **Abstract classes**: cannot be instantiated directly; can define shared behavior and abstract methods.
- **`final`**: prevents extending a class or overriding a method.
- **`readonly` properties** (PHP 8.1+): limit reassignment after initialization.
- **Namespaces and autoloading**: organize classes across files; Composer autoloading is especially relevant to Laravel.
- **Dependency injection**: pass collaborators into constructors rather than creating them internally.

## Practice tasks
1. Create a `Book` class with `title`, `author`, and `describe()`.
2. Create two `Student` objects with different names; explain `$this`.
3. Add a private `balance` and validated `withdraw()` to `BankAccount`.
4. Make `Teacher extends Person` and override `greet()`.
5. Explain when to use `->` versus `::`.

**Revision focus:** class → object → property/method → `$this` → constructor → visibility → inheritance → interfaces.
