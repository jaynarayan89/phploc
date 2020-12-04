<?php
require '../error_config.php';

$tz = new DateTimeZone('America/los_angeles');

$x =$tz->getOffSet(new Datetime('1 march'));
var_dump($x);