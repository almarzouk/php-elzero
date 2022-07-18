<?php
/*


FUNCTION
    return


*/
function get_data($country = "Private country", $name = "Private", $age = "Private", $address = "Private address")
{
    $line_one = "Your country is  $country and your name is $name <br>";
    $line_two = "Your age is $age and your address is $address <br>";
    return $line_one . $line_two;
}
echo get_data(address: "Cairo");
