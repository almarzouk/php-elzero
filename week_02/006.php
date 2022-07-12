<?php
/*
========================================
# Data types
#----------#
# type juggling + Automatic type conversion
========================================
*/

echo 1 + '2'; // 3
echo '</br>';
echo gettype(1 + "2"); // Integer it's just convert the output type not the input "it's importent"
echo '</br>';
echo true; // 1 because true = 1 and false = 0
echo '</br>';
echo gettype(true); // 1 - boolean 
echo '</br>';
echo true + true; // 2 because true = 1 so 1 + 1 = 2
echo '</br>';
echo gettype(true + true); // 2 - integer because we sum 1 + 1 
echo '</br>';
echo 1 + '10 number'; // the result is 11 but you'll encounter warning " A non-numeric value encountered "
echo '</br>';
echo gettype(1 + '10 number'); // Integer
echo '</br>';
echo 1 + 10.5; // 11.5
echo '</br>';
echo gettype(1 + 10.5); // double => float
echo '</br>';
