<?php

$a = "jumaa";
$b = &$a;
$b = 'mrz';
$c = $b;

echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $c;
echo '<br>';
