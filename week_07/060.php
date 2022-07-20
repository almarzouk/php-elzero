<?php

/*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  */
echo substr_replace("OneTwo", 1, 2); // 1
echo '<br>';
echo substr_replace("OneTwo", 1, 3); // one1
echo '<br>';
echo substr_replace("OneTwo", 1, 5); // onetw1
echo '<br>';
echo substr_replace("OneTwo", 2, 2); // on2
echo '<br>';
echo substr_replace("OneTwo", 2, 2, 2); // on2wo
echo '<br>';
echo substr_replace("OneTwo", 2, 4, 1); // o2o
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al eb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool eb_Sch
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School

echo "<pre>";
print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0));
echo "</pre>";
