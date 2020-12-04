<?php
require '../error_config.php';

$tmp = "%2.2s%'*10d %-10.3f</br>";

echo "<pre>";
$name="pencil";
$qty="200";
$price ="4.25";
printf($tmp,$name,$qty,$price);

$name="pencil";
$qty="200";
$price ="4.25";
printf($tmp,$name,$qty,$price);

$name="eraser";
$qty="20";
$price ="1.25";
printf($tmp,$name,$qty,$price);

$name="sharpner";
$qty="250";
$price ="3.10";
printf($tmp,$name,$qty,$price);
echo "</pre>";

$str = "          bbxcvbb    ";
echo "--".trim($str," b")."--"

?>