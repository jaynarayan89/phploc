<?php
require '../error_config.php';

$depart = new Datetime('03.12.2020 02:30 am Asia/kolkata'); 
$arrive = new Datetime('04.12.2020 01:55 am America/new_york'); 

$diff  = $depart->diff($arrive);

echo $diff->format('%R %h hr %i minutes');