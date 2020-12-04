<?php
require '../error_config.php';


$ts = strtotime('7/4/2015');

$date = new DateTime();
/*

echo $date->format('g:i A ,l , F j,Y').'<hr>';

$date->modify('12:04 nov 2000 ');
echo $date->format('g:i A ,l , F j,Y').'<hr>';

$date->modify('yesterday  8pm');
echo $date->format('g:i A ,l , F j,Y').'<hr>';*/

$date->modify(' first day of next month ');
echo $date->format('g:i A ,l , F j,Y').'<hr>';
