<?php
// function greeting($name, $sex = '')
// {
//     if ($sex == 'Female') {
//         echo "Welcome Miss $name";
//     } elseif ($sex == 'Male') {
//         echo "Welcome Mr $name";
//     } elseif (!$sex) {
//         echo "Welcome  $name";
//     }
// }
// echo greeting("Osama", "Male"); // Hello Mr Osama
// echo greeting("Eman", "Female"); // Hello Miss Eman
// echo greeting("Sameh"); // Hello Sameh   

// function get_arguments(...$args)
// {
//     $all_arg = '';
//     foreach ($args as $arg) :
//         $all_arg .= $arg . ' ';
//     endforeach;
//     echo $all_arg;
// }
// echo get_arguments("Hello", "Elzero", "Web", "School");
// function sum_all(...$nums)
// {
//     $result = 0;
//     foreach ($nums as $num) {
//         if ($num == 5) {
//             continue;
//         }
//         if ($num == 10) {
//             $num = 20;
//         }
//         $result += $num;
//     }
//     echo $result;
// }
// echo sum_all(10, 12, 5, 6, 6, 10); // 64
// echo '<br>';
// echo sum_all(5, 10, 5, 10); // 40

// function multiply(...$nums)
// {
//     $result = 1;
//     foreach ($nums as $num) {
//         if (is_string($num)) {
//             continue;
//         }
//         if (is_double($num)) {
//             $num = intval($num);
//         }
//         $result = $result * $num;
//     }
//     echo $result;
// }
// echo multiply("A", 10, 30); // 300
// echo "<br>";
// echo multiply(100.5, 10, "B"); // 1000
echo "<br>";
function check_status($a, $b, $c)
{
}

echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"