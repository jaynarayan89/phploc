<?php
require '../error_config.php';

$depart = new Datetime('03.12.2020 02:30 am Asia/kolkata'); 
$arrive = new Datetime('04.12.2020 01:55 am America/new_york'); 

$diff  = $depart->diff($arrive);

var_dump($diff->d,$diff->h,$diff->i);

//diff between two timezone

$india = new Datetime(' 1100 Asia/kolkata');
$usa = new Datetime('1100 America/new_york');

var_dump($india->diff($usa)->h,$india->diff($usa)->i);

var_dump($usa->diff($india));