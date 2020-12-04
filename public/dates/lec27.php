<?php
require '../error_config.php';

$dt = new DateTime();
$tz = $dt->getTImeZOne()->getNAme();
var_dump($tz);

$tz = (new DateTime())->getTImeZOne();
var_dump($tz);
