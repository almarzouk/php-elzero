<?php

/*
    Variable Variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
  */

$a = 'jumaa';
$$a = 'mrz';
$$$a = 'almarzouk';

echo $a;
echo "<br>";
echo $$a;
echo "<br>";
echo $mrz;
echo "<br>";
echo $$$a;
echo "<br>";
echo $mrz;
echo "<br>";

echo "Hello ${$a}"; // $$a
echo "<br>";
echo "Hello ${$$a}"; // $$$a