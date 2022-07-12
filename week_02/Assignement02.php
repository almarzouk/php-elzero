<?php
################ assignment -1
echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50
echo '<br>';
echo gettype((int)15.2 + (int)14.7 + (int) (10.5 + 10.5)); // Integer

################ assignment -2
$x = 100;
// Method One
echo '<br>';
echo gettype($x);
// Method Two
echo '<br>';
var_dump($x);
// Method Three => Optional
echo '<br>';

################ assignment -3
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
echo '<br>';
// Hello "Elzero" \\ """ We Love "$$PHP"

################ assignment -4
echo nl2br("We \n Love \n Elzero \n Web \n School");
/*
We
Love
Elzero
Web
School
*/

################ assignment -5
echo <<< 'list'
Hello "'Elzero'"
<br>
We Love $Programming$
<br>
Languages Specially "PHP"
list;
echo '<br>';

################ assignment -6
$something = "Programming";
echo <<< "code"
Hello \PHP\
We Love $something
code;
echo '<br>';

################ assignment -7
echo ((bool)"Hello PHP" + 0);
echo '<br>';
echo gettype(((bool)"Hello PHP" + 0));
// Needed Output
// 1
// integer
echo '<br>';

################ assignment -8
echo '<br>';
$jumaa = [
    'frontEnd' => ['html', 'css', 'JS' => [
        'vuejs' => [
            2 => 'v2',
            3 => 'v3'
        ],
        "reactjs", 'Svelte'
    ]],
    'backend' => [
        'php', 'mysql', 'security'
    ], 'git', 'github', 'testing' => [
        'unity testing', 'end to end', 'integration'
    ]
];

echo '<pre>';
print_r($jumaa);
echo '</pre>';

// Array
// (
//   [FrontEnd] => Array
//     (
//       [0] => HTML
//       [1] => CSS
//       [JS] => Array
//         (
//           [Vuejs] => Array
//             (
//               [2] => v2
//               [3] => v3
//             )

//           [0] => Reactjs
//           [1] => Svelte
//         )
//     )

//   [BackEnd] => Array
//     (
//       [0] => PHP
//       [1] => MySQL
//       [2] => Security
//     )

//   [0] => Git
//   [1] => Github
//   [Testing] => Array
//     (
//       [0] => Unit Testing
//       [1] => End To End
//       [2] => Integration
//     )
// )
###################################################################### the end