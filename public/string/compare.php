<?php
require '../error_config.php';

// using comparison operators.
$name1 = 'aX';
$name2=  'aa';

if ($name1 < $name2) {
    echo "$name1 < $name2";
}
if ($name1 > $name2) {
    echo "$name1 > $name2";
}
if ($name1 == $name2) {
    echo "$name1 == $name2";
}

// identity vs equal
$a = "12 o'clock";
$b = 12.00;
if ($a == $b) {
    echo "The mouse ran up the clock";
}
if ($a === $b) {
    echo "The mouse ran up the clock but this msg do not appear";
}

//strcmp functions

$name1 = 'b';
$name2=  'bc';

var_dump(strcmp($name1, $name2));
// 0 equal
//-n  first is smaller, second is larger a,b
//+n  first is lareger, second is smaller b,a

// strcasecmp
var_dump(strcasecmp($name1, $name2));

// n chars
var_dump(strncmp('name1', 'Name2', 5));
var_dump(strncasecmp('name1', 'Name2', 5));


//similar text
similar_text('JAY', 'jay', $p);
var_dump($p);

$sim = similar_text('bafoobar', 'barfoo', $perc);
echo "similarity: $sim ($perc %)\n";
$sim = similar_text('barfoo', 'bafoobar', $perc);
echo "similarity: $sim ($perc %)\n";