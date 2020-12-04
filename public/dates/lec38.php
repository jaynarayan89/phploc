<?php
require '../error_config.php';

$start = new DateTime('12/31/2019');
$end = new DateTime('1/1/2021');
$interval = DateInterval::createFromDateString('first saturday of next month');
$period = new DatePeriod($start,$interval,$end,DatePeriod::EXCLUDE_START_DATE);
// var_dump($period);
foreach($period as $p )
echo $p->format(DATE_COOKIE).'<hr>';