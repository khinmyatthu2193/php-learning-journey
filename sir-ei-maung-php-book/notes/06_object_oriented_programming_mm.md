# PHP Learning Journey — Chapter 7: Object-Oriented Programming (OOP) — မြန်မာဘာသာ

> PHP 8+ အတွက် လေ့လာရေးမှတ်စု။ ကျွန်ုပ်တို့ရဲ့ Chapter 7 သင်ခန်းစာကို အခြေခံထားပြီး စာအုပ်ကို စာမျက်နှာအလိုက် ကူးယူထားခြင်း မဟုတ်ပါ။

## 1. OOP ဆိုတာဘာလဲ?
**Object-Oriented Programming** ဆိုတာ ဆက်စပ်နေတဲ့ **Data (Properties)** နဲ့ **လုပ်ဆောင်ချက် (Methods)** တွေကို Object တစ်ခုအတွင်း စုစည်းရေးသားတဲ့ နည်းလမ်းပါ။

- **Class** = Blueprint / ပုံစံခွက်
- **Object** = Class ကနေ `new` နဲ့ တည်ဆောက်ထားတဲ့ Instance

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

## 2. Property နဲ့ Method
- **Property** ဆိုတာ Object ရဲ့ အချက်အလက် (ဥပမာ `$name`) ပါ။
- **Method** ဆိုတာ Class အတွင်းက Function (ဥပမာ `introduce()`) ပါ။
- PHP မှာ Object ရဲ့ Property/Method ကို `->` နဲ့ ခေါ်ပါတယ်။
- Class တစ်ခုကနေ Object အများကြီး ဖန်တီးနိုင်ပြီး Object တစ်ခုချင်းစီရဲ့ Data က သီးခြားဖြစ်ပါတယ်။

```php
$a = new Student();
$b = new Student();
$a->name = "Alice";
$b->name = "Bob";
echo $a->name; // Alice
```

## 3. `$this` ဆိုတာဘာလဲ?
Instance Method တစ်ခုအတွင်းမှာ `$this` က **လက်ရှိ Object** ကို ရည်ညွှန်းပါတယ်။

```php
class Car {
    public string $brand = "Toyota";
    public function describe(): string {
        return $this->brand;
    }
}
```

**သတိ:** `$this->name` က `name` ဆိုတဲ့ Property ကို ရည်ညွှန်းတာပါ။ `$this->$name` က Variable ထဲက နာမည်အတိုင်း Property ကို ရွေးတဲ့ အခြား Syntax ဖြစ်ပါတယ်။

## 4. Constructor — `__construct()`
`new` နဲ့ Object ဖန်တီးတဲ့အချိန် Constructor ကို အလိုအလျောက် ခေါ်ပါတယ်။ Initial Data သတ်မှတ်ဖို့ အသုံးများပါတယ်။

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

**PHP 8+ Constructor Property Promotion** နဲ့ ပိုတိုအောင် ရေးနိုင်ပါတယ်။

```php
class Student {
    public function __construct(
        public string $name,
        public int $age
    ) {}
}
```

## 5. Access Modifiers နဲ့ Encapsulation
| Modifier | Class အတွင်း | Child Class | Class အပြင် |
|---|---|---|---|
| `public` | ရ | ရ | ရ |
| `protected` | ရ | ရ | မရ |
| `private` | ရ | တိုက်ရိုက်မရ | မရ |

**Encapsulation** ဆိုတာ Data ကို အပြင်ကနေ အလွယ်တကူ မပြောင်းနိုင်အောင် ထိန်းချုပ်ပြီး သတ်မှတ်ထားတဲ့ Method တွေကနေ ပြောင်းစေတဲ့ အယူအဆပါ။

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
```

## 6. OOP ရဲ့ အဓိက Pillars (4) ခု
1. **Encapsulation** — Internal Data ကို ထိန်းချုပ်ခြင်း။
2. **Inheritance** — Parent Class ကနေ သက်ဆိုင်ရာ Members တွေ ဆက်ခံခြင်း။
3. **Polymorphism** — တူညီတဲ့ Interface/Method ကို Object အမျိုးမျိုးက မတူညီတဲ့ပုံစံနဲ့ လုပ်ဆောင်နိုင်ခြင်း။
4. **Abstraction** — အသုံးပြုသူအတွက် လိုအပ်တဲ့ လုပ်ဆောင်ချက်ကိုသာ ဖော်ပြပြီး အတွင်းပိုင်းအသေးစိတ်ကို ဖုံးကွယ်ခြင်း။

## 7. Inheritance — `extends`
Child Class က Parent Class ရဲ့ Accessible Members တွေကို ဆက်ခံနိုင်ပါတယ်။ Method ကို **Override** လုပ်နိုင်ပါတယ်။

```php
class Person {
    public function greet(): string { return "Hello"; }
}

class Student extends Person {
    public function greet(): string { return "Hello from student"; }
}

echo (new Student())->greet(); // Hello from student
```

## 8. Interface နဲ့ Polymorphism
**Interface** က Implement လုပ်တဲ့ Class တွေ လိုက်နာရမယ့် Method Contract ကို သတ်မှတ်ပါတယ်။

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

`notify()` က Interface တစ်ခုတည်းကို အခြေခံထားလို့ Notification Object နှစ်မျိုးလုံးနဲ့ အလုပ်လုပ်နိုင်ပါတယ်။

## 9. Static Methods နဲ့ `::`
Static Member က Object တစ်ခုချင်းစီထက် Class ကိုယ်တိုင်နဲ့ သက်ဆိုင်ပါတယ်။

```php
class Calculator {
    public static function add(int $a, int $b): int {
        return $a + $b;
    }
}
echo Calculator::add(10, 20); // 30
```

- `->` = Instance Member ကို ခေါ်ရန်
- `::` = Static Member / Class Constant ကို ခေါ်ရန်
- Static Method အတွင်း `$this` မရှိပါ။

## 10. လက်တွေ့ဥပမာ — Laptop Rental

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
";
echo $laptop->lend() . "
";
$laptop->returnLaptop();
echo $laptop->lend() . "
";
```

ဒီဥပမာမှာ Constructor, Property, Method, `$this`, `private`, `public`, `return` နဲ့ `if` တို့ကို ပေါင်းသုံးထားပါတယ်။

## 11. Beginner တွေ မှားတတ်တဲ့အချက်များ
- `$student.name` အစား `$student->name` ကို သုံးပါ။
- Object ဖန်တီးဖို့ `new` လိုပါတယ်။
- `$this->name` နဲ့ `$this->$name` ကို မရောပါနဲ့။
- `private` Property ကို Class အပြင်ကနေ တိုက်ရိုက် မသုံးနိုင်ပါ။
- `->` နဲ့ `::` က မတူပါ။
- ရိုးရှင်းတဲ့ Script တိုင်းကို Class နဲ့ရေးဖို့ မလိုပါ။

## 12. နောက်ထပ်လေ့လာသင့်တဲ့ Concepts (အပို)
- **Abstract Class** — တိုက်ရိုက် Instance မဖန်တီးနိုင်တဲ့ Class။
- **`final`** — Class ကို ဆက်ခံခြင်း၊ Method ကို Override လုပ်ခြင်း တားနိုင်တယ်။
- **`readonly`** (PHP 8.1+) — Initialize လုပ်ပြီးတဲ့ Property ကို ထပ်မံ Assign မလုပ်နိုင်အောင် ကန့်သတ်တယ်။
- **Namespace / Autoloading** — Class တွေကို File အများကြီးမှာ စနစ်တကျ စုစည်းရန်။ Laravel မှာ Composer Autoloading အရေးကြီးတယ်။
- **Dependency Injection** — လိုအပ်တဲ့ Object တွေကို Constructor ကနေ လက်ခံသုံးခြင်း။

## လေ့ကျင့်ခန်း
1. `Book` Class တစ်ခုရေးပြီး `title`, `author`, `describe()` ထည့်ပါ။
2. `Student` Object နှစ်ခုဖန်တီးပြီး `$this` အလုပ်လုပ်ပုံ ရှင်းပြပါ။
3. `BankAccount` မှာ `withdraw()` Method ထည့်ပါ။
4. `Teacher extends Person` နဲ့ `greet()` ကို Override လုပ်ပါ။
5. `->` နဲ့ `::` ဘာကွာလဲ ရှင်းပြပါ။

**ဦးစားပေး ပြန်လေ့လာရန်:** Class → Object → Property/Method → `$this` → Constructor → Access Modifiers → Inheritance → Interface။
