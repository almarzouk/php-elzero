<?php
/*
//  Comparison Operators Part 1

==   => equal
!=   => not equal
<>   => not equal
===  => identical
!==  => not identical

*/

// Test equal
var_dump(100 == 100);
echo '<br>';
var_dump(100.0 == 100);
echo '<br>';
var_dump(100 == '100');
echo '<br>';
var_dump(100.0 == '100');
echo '<br>';
var_dump(100 != '100');
echo '<br>';
var_dump(100.0 <> '100');
echo '<br>';
echo '###############################';
echo '<br>';

// Test identical
var_dump(100 === 100);
echo '<br>';
var_dump(100.0 === 100);
echo '<br>';
var_dump(100 === '100');
echo '<br>';
var_dump(100.0 === '100');
echo '<br>';
var_dump(100 !== '100');
echo '<br>';
var_dump(100.0 <> '100');
