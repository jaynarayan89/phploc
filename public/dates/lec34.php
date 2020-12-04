<?php
require '../error_config.php';

$today = new DateTime();

$p = new DateINterval('P1M');

$amonthlater= $today->add($p);
var_dump($amonthlater);

$amonthbefore = $today->sub($p);
var_dump($amonthbefore);

$p = new DateINterval('P0001-00-04T00:00:00');
$amonthbefore = $today->sub($p);
var_dump($amonthbefore);
