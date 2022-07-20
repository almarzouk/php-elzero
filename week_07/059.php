<?php

/*
    String Functions
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
  */

echo str_replace('@', 'a', 'jum@@', $r);
echo "<br>";
echo $r;
echo "<br>";
echo str_replace(['#', '@', '%'], 'A', "I don't like #pple #nd #n%n%s %nd @ssist@nte");
echo "<br>";
echo str_replace(['#', '@'], ['e', 'o'], "#lz#ro W#b Sch@@l");

echo '<pre>';
print_r(str_replace('one', 1, ['one', 'two', 'three', 'one', 'one']));
echo '</pre>';

echo '<pre>';
print_r(str_replace(['one', 'two'], [1, 2], ['one', 'two', 'three', 'one', 'one']));
echo '</pre>';
