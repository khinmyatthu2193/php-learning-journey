<?php
    $var;
    var_dump($var); // Warning: Undefined Variable  // NULL

    $var = 123;
    var_dump($var); // int(123)

    $var = "abc";
    var_dump ($var); // String(3) "abc"

//******************************//

$name = "Bob";
function hello(){
    global $name;  // php မှာက global variable ကို function ထဲမှာသုံးချင်ရင် global keyword ကိုသုံးရမယ်
    echo "Hello $name\n";
}
hello();

//******************************//



//******************************//

function hi(){
    if (true){
        $name1 = "Alice";
    }
    echo $name1."\n";
}
hi();

//******************************//


//******************************//

    echo isset($name)."\n"; 
// Variable တွေရှိမရှိ စစ်ချင်ရင် isset() ကိုအသုံးပြုပြီး စစ်နိုင်ပါတယ်။ ရှိရင် true အနေနဲ့ 1 ကိုပြန်ပေးပြီး မရှိရင်တော့ false အနေနဲ့ Empty ကို ပြန်ပေးပါတယ်။
//******************************//



//******************************//

// Constant ပေတွကို define() Function သုံးပြီး ကြေညာပေးရပါတယ်။ $ မလိုပါ။
    define("PI", 3.14159);
    echo PI."\n";
    define("MIN", 1);
    define("MAX", 10);
    echo MAX."\n"; // 10
    //MAX = 20; // Error: Cannot re-assign constant MAX
    $MAX = 20; // this will work because $MAX is a variable, not a constant

//******************************//
