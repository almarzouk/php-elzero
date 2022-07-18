<?php
/*

FUNCTION
    - Advanced ex
    - Real life example

*/
function say_hello_to($one, $two)
{
    echo "Hello $one and $two <br>";
}

say_hello_to('jumaa', 'rama');
say_hello_to('rama', 'jumaa');

function deep_freezer($item)
{
    if ($item == 'Water') {
        echo 'Make it ice' . '<br>';
    } elseif ($item == 'Cola') {
        echo 'Make it Cold' . '<br>';
    } elseif ($item == 'Fruits') {
        echo 'Keep it Fresh' . '<br>';
    } else {
        echo 'Unknown Item' . '<br>';
    }
}
deep_freezer('Water');
deep_freezer('Cola');
deep_freezer('Fruits');
deep_freezer('jumaa');
