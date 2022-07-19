<?php

/*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
  */

echo chunk_split("Jumaa almarzouk", 2, "$") . "<br>";
echo str_split("Jumaaalmarzouk", 2) . "<br>";

echo '<pre>';
print_r(str_split("Jumaa almarzouk", 2));
echo '</pre>';


echo "<br>";
// delete tags from string choose what you want to keep
echo "<h3>hello <b>jumaa</b></h3>";
echo strip_tags("<h3>hello <b>jumaa</b></h3>", "<b>");
