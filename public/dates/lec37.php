<?php
require '../error_config.php';

$start = new DateTime();
$interval = new DateInterval('P4W');

// $period = new DatePeriod($start, $interval , 4); 

// foreach($period as $p )
// var_dump($p);

$end= new DateTIme('25-02-2021');
$period = new DatePeriod($start, $interval , $end); 

foreach($period as $p )
var_dump($p);
