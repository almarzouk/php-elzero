<?php

/*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */

//   implode link join in js
$friends = ["Ahmad", "Rama", "Nour", "Sara"];
echo implode(" ", $friends) . "<br>";
echo implode(", ", $friends) . "<br>";
echo implode("@", $friends) . "<br>";
echo implode($friends) . "<br>";
//    explode to convert string to array

$str = "Elzero,web,school,is,not,cool";


echo '<pre>';
print_r(explode(",", $str));
echo '</pre>';

// add limit
echo '<pre>';
print_r(explode(",", $str, 2));
echo '</pre>';

// shuffling the string everytime you refresh
echo str_shuffle("Jumaa") . "<br>";
echo strrev("Jumaa") . "<br>";

// trim removing chars or spicail or spaces before and after the string
echo trim("  Jumaa   ") . "<br>";
echo trim("      @@@Jumaa@@@", "@ ") . "<br>";
