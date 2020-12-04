<?php
require '../error_config.php';

$tz = new DateTimeZone('America/los_angeles');

$arr =$tz->getTransitions(strtotime('1.1.2015'),strtotime('1.1'));

var_dump($arr);