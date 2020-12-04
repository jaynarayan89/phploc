<?php
require '../error_config.php';

$dt = new DateTime();
$dt->setTimeZOne(new dateTimeZone('America/new_york'));
var_dump($dt,$dt->gettimestamp());

$dt->setTimeZOne(new dateTimeZone('Asia/tokyo'));
var_dump($dt,$dt->gettimestamp());