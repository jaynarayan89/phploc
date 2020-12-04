<?php
require '../error_config.php';


$ts = strtotime('7/4/2015');

$date = new DateTIme;

echo $date->format('l , F j,Y').'<hr>';

$date->setTImestamp($ts);

echo $date->format('g:i A ,l , F j,Y').'<hr>';

////////*******************/

$date = new DateTIme("@$ts");

echo $date->format('l , F j,Y').'<hr>';