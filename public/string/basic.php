<?php
require '../error_config.php';

$name = 'jay';
echo "hi $name dear";

$t= <<<FORM
HI THERE
I AM $name</br>
how are you</br>
FORM;

echo $t;
echo $name[1];

echo "<br>";

echo print "jay";
