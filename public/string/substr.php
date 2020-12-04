<?php
require '../error_config.php';

echo "substr('abcdefgh',0)  ->  ";
echo substr('abcdefgh', 0);
echo "</br>";

echo "substr('abcdefgh',5)  ->  ";
echo substr('abcdefgh', 5);
echo "</br>";

echo "substr('abcdefgh',5,-2)  ->  ";
echo substr('abcdefgh', 5, -2);
echo "</br>";

echo "substr('abcdefgh',-5,2)  ->  ";
echo substr('abcdefgh', -5, 2);
echo "</br>";

echo "substr('abcdefgh',-4,-3)  ->  ";
echo substr('abcdefgh', -4, -3);
echo "</br>";
