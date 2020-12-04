<?php
require '../error_config.php';

$d = new DateTime();
$d->setDate(1989,12,29)->setTime(12,0);

echo $d->format(DATE_COOKIE);
