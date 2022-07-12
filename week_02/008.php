<?php
/*
================
# Type Casting #
================


=========================================
= bool  => Boolean
= int   => Integer
= float => Floating Point Number | double
= string
= array
= object
= null
= search for settype
=========================================

*/

echo 1 + (int) '2'; //3
echo '</br>';
echo gettype(1 + (int) '2'); //  3 integer
echo '</br>';
echo 1 + 9.5; //10.5 float
echo '</br>';
echo 1 + (int) 9.5; //10 integer
echo '</br>';
echo  (int) 1.5 + (int) 9.5; //10 integer
echo '</br>';
echo 1.5 + 9.5; //10 double
echo '</br>';
echo  (int) (1.5 + 9.5); //11 integer
