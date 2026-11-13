<?php   
    function add ($a,$b){
        return $a + $b;
    }
    $result = add(1,2);
    echo $result . "\n";
    echo add(2,2,3);
// argument မစုံရင် error တက်မယ်။ argument ပိုသွားရင်တော့ error တော့ မတက်ဘူး။ ဒါမယ့် ပိုသွားတဲ့ arg ကိုလည်း အလုပ်မလုပ်ဘူး
// တန်ဖိုးကို ပြန်ပေးချင်ရင် return statement နဲ့ ပြန်လို့ရတယ်။ return statement မပါရင်တော...
// default အနေနဲ့ null ကို ပြန်တယ်။


function subtract($c, $d = 2){ // parameter တွေမှာ default value လည်း ထားလို့ရတယ်။
    return $c - $d;
}
echo "\n";
echo subtract(3);
echo "\n";

//Rest Parameter
function rest ($e, ...$f){
    return $e + array_sum($f);
    print_r($f);
}
echo rest(1,2,3,4,5); //15

//type hinting
// function name(type $parameter): returnType {
//     // code
// }
//code ဖတ်ရလွယ်ကူပြီး error တက်ခဲ့ရင်တောင် ဘာ error မြန်းတန်းသိအောင် Type Hinting ကိုသုံးတယ်။

