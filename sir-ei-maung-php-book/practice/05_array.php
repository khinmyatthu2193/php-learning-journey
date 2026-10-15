<?php

    // Numeric Array
    // Array Index ကို နံပါတ်စဉ်အတိုင်း သတ်မှတ်အသုံးပြုတဲ့ Array

    $users = array("Alice", "Bob", "Charlie"); //before php 5.4
    echo $users[0]."\n"; // Alice
    echo $users."\n"; //array

    $fruits = ["Apple", "Banana", "Cherry"]; //after php 5.4
    echo $fruits[1]."\n"; // Banana
    print_r($fruits); // Array ( [0] => Apple [1] => Banana [2] => Cherry ) 
    var_dump($fruits); // array(3) { [0]=> string(5) "Apple" [1]=> string(6) "Banana" [2]=> string(6) "Cherry" }

    // Associative Array
    // Array Index ကို စာလုံးအတိုင်း သတ်မှတ်အသုံးပြုတဲ့ Array
