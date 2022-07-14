<?php
// // 1
// echo 10 / 20 / 15 / 3 / 190 / 10 % 400; // 0
// echo '<br>';
// echo 10 / 20 % 15 % 3 % 190 % 10 % 400; // 0
// echo '<br>';
// echo 10 / 20 % 15 * 3 / 190 % 10 * 400; // 0
// echo '<br>';

// // 2
// $a = +"10";
// echo gettype($a);
// echo '<br>';
// $a = -"10";
// echo gettype($a);
// echo '<br>';
// $a = "10";
// echo gettype((int) $a);
// echo '<br>';

// 3
// $a = 10;
// $b = 20;
// echo (-$a /  $a);
// echo '<br>';
// echo (-$b /  $b);

// 4
// $a = 10;
// $b = 20;
// $c = 15;

// var_dump($a <= $b); // True
// echo '<br>';
// var_dump($c >= $a); // True
// echo '<br>';
// var_dump($a != $b); // True
// echo '<br>';
// var_dump($a !== $b); // True
// echo '<br>';
// var_dump($a <> $c); // True
// echo '<br>';
// var_dump(!$a === !$c); // True
// echo '<br>';
// var_dump(gettype($a) && gettype($b)); // True
// echo '<br>';
// var_dump(gettype($a) and gettype($b)); // True
// echo '<br>';
// var_dump(gettype((float) $a) || gettype($b)); // True
// echo '<br>';

//5
// $points = 10;
// $points++;
// $points++;
// $points++;
// echo $points;
// echo '<br>';
// $points--;
// $points--;
// $points--;
// $points--;
// $points--;
// echo $points;
// echo '<br>';


//6

// $a = "Elzero";
// $b = "Web";
// $c = "School";

// // Method One
// $d = "$a $b $c";
// echo $d; // Elzero Web School
// echo '<br>';

// // Method Two
// $d = "$a" . "$b" . "$c";
// echo $d; // Elzero Web School
// echo '<br>';

// // Method Three
// $d = "{$a} {$b} {$c}";
// echo $d; // Elzero Web School
// echo '<br>';

// // Method Four
// $d = "${a} ${b} ${c}";
// echo $d; // Elzero Web School
// echo '<br>';

// 7
// echo '<br>';
// $a = 10;
// $b = 20;

// echo (($a + $b) * ($a + $b) + $a * $a) * $a; // 10000

// 8
// Code 1
// $a = $b;

// Code 2
// @$f = file("Not_A_File") or die('cosutm error');
// Code 3
// @(include "Not_A_File") or die('cosutm error');