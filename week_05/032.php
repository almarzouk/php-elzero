<?php
/*

Control Structure 
    if,elseif,else <= Basics 

    syntax
    if(condition){
        block of code
    }

*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['lang'] == 'ar') {
        echo "Hello {$_POST['username']} Welcome to arabic services";
    } elseif ($_POST['lang'] == 'en') {
        echo "Hello {$_POST['username']} Welcome to english services";
    } elseif ($_POST['lang'] == 'sp') {
        echo "Hello {$_POST['username']} Welcome to spanish services";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">arabic</option>
            <option value="en">english</option>
            <option value="sp">spanish</option>
        </select>
        <input type="submit" value="go">
    </form>
</body>

</html>