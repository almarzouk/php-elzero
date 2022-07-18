<?php

/*

spead

*/

function calculate(...$nums)
{
    $result = 0;
    foreach ($nums as $num) {
        $result += $num;
    }
    echo $result;
}
echo calculate(10, 20, 30, 50, 4, 8);
