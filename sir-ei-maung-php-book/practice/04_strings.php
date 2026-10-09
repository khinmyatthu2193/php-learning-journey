<?php
    echo strlen("Hello World")."\n"; // 11
    echo str_word_count("Hello World")."\n"; // 2
    echo strrev("Hello World")."\n"; // dlroW olleH
    echo strpos("Hello World", "World")."\n"; // 6
    echo str_replace("World", "PHP", "Hello World")."\n"; // Hello PHP //ရှာချင်တဲ့စာလုံး၊ အစားထိုးချင်တဲ့စာလုံး၊ မူရင်း String အစီအစဉ်အတိုင်း ပေပးရပါတယ်။
    echo str_repeat("Hello", 3)."\n"; // HelloHelloHello
    echo strtoupper("Hello World")."\n"; // HELLO WORLD
    echo strtolower("Hello World")."\n"; // hello world
    echo ucfirst("hello world")."\n"; // Hello world
    echo ucwords("hello world")."\n"; // Hello World
    echo trim("   Hello World   ")."\n"; // Hello World
    echo ltrim("   Hello World   ")."\n"; // Hello World
    echo rtrim("   Hello World   ")."\n"; //    Hello World
    echo str_pad("Hello", 10, "-")."\n"; // Hello-----
    echo str_repeat("-", 10)."\n"; // ----------
    echo str_pad("Hello", 10, "-", STR_PAD_LEFT)."\n"; // -----Hello
    echo str_pad("Hello", 10, "-", STR_PAD_BOTH)."\n"; // --Hello---
    echo str_pad("Hello", 10, "-", STR_PAD_RIGHT)."\n"; // Hello-----
    echo str_pad("Hello", 10, "-", STR_PAD_BOTH)."\n"; // --Hello---
    echo strlen("ကခဂ")."\n"; // 9 (မြန်မာစာကို UTF-8 Encoding နဲ့သုံးရင် 1 စာလုံး = 3 bytes ဖြစ်ပါတယ်။)


//******************************//

//စာကြောင်းတစ်ကြောင်းကနေ လိုချင်တဲ့အပိုင်းကို ခွဲထုတ်ချင်ရင် substr() function ကိုသုံးနိုင်ပါတယ်။
$str = "Hello World";
echo substr($str, 0, 5)."\n"; // Hello
echo substr($str, 6)."\n"; // World

//******************************//

