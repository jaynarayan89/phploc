<?php
require '../error_config.php';

$date = new DateTime("1969-12-31");
// "-2209078800"
echo $date->format("U");

var_dump((int)$date->format("U"));
echo '<hr>';
// false
echo $date->getTimestamp();
echo '<hr>';