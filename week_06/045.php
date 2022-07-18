<?php
/*


FUNCTION
    return

*/

$prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

function get_number($one, $two)
{
    return $one + $two;
}

$prize_number = get_number(2, 1);
echo $prizes[get_number(1, 1)];
// var_dump($prize_number);
