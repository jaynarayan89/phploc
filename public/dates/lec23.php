<?php
require '../error_config.php';

/*

$date1 = new DateTime('29.12.1989');
$date1 = new DateTime('29.12.1989');
echo $date1->format(DATE_COOKIE).'</br>';

$date1 = new DateTime('29.12.1989 America/new_york');
$date1 = new DateTime('29.12.1989 America/new_york');
echo $date1->format(DATE_COOKIE).'</br>';

*/


// $date1 = new DateTime('today');
// $date2 = new DateTime('today');
// var_dump($date1);
// var_dump($date2);

// $date1 = new DateTime('');
// $date2 = new DateTime('');
// var_dump($date1);
// var_dump($date2);


// $date1 = new DateTime('yesterday');
// $date2 = new DateTime('yesterday');
// var_dump($date1);
// var_dump($date2);

// $date1 = new DateTime('1100');
// $date2 = new DateTime('1200 America/los_angeles');
// var_dump($date1);
// var_dump($date2);

$date1 = new DateTime('1100 America/new_york');
$date2 = new DateTime('1100 America/los_angeles');
var_dump($date1);
var_dump($date2);


if($date1 === $date2)
{
	echo '===';
}else if($date1 == $date2)
{
	echo '==';
}else if($date1 < $date2)
{
	echo 'd1 < d2';
}else if($date1 > $date2)
{
	echo 'd1 > d2';
}