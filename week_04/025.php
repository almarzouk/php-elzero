<?php
// logical operator 

/*

and => and => two are true
&&  => and => two are true
or  => and => one or both are true
||  => and => one or both are true
xor => xor => one Is True but not both
!   => Not true 
*/

var_dump(100 > 50 and 100 > 80 and 100 > 90);
echo '<br>';
var_dump(100 > 50 && 100 > 80 && 100 > 90);
echo '<br>';
var_dump(100 > 50 or 110 > 120 or 110 > 90);
echo '<br>';
var_dump(100 > 50 xor 80 > 90);
echo '<br>';
