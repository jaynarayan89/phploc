<?php
require '../error_config.php';

$sqldate= '1989-12-29 11:55:00';

$d = date(DATE_COOKIE,strtotime($sqldate));
var_dump($d);

$d = new DateTime($sqldate);
var_dump($d);

