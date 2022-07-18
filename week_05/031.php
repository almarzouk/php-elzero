<?php
/*

Control Structure 
    if,elseif,else <= Basics 

    syntax
    if(condition){
        block of code
    }

*/

$page = "About";
if ($page == "About") {
    echo "this is the page";
}

// 

echo '<br>';
$title = "";
if ($title == '') {
    echo 'Unknown Page';
} else {
    echo $title;
}
echo '<br>';

// 

$lang = 'english';
if ($lang == 'arabic') {
    echo 'welcome to arabic services';
} elseif ($lang == 'english') {
    echo 'welcome to english services';
} else {
    echo 'welcome to home page';
}
