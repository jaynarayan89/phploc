<?php
require '../error_config.php';

// current time in diff countries 

$in = new DateTime();
$us = new DateTime('America/los_angeles');
var_dump($in,$us);

// same date n time in different zone

$d_in = new DateTime('29.12.1989 11:50 Asia/kolkata');
$d_us = new DateTime('29.12.1989 11:50 America/los_angeles');
var_dump($d_in,$d_us);// both dates are same ut underlaying timstamp is different
var_dump($d_in->getTimeStamp(),$d_us->getTimeStamp());

// we can also pass timezone explicitly in constructor

$tz_tokyo = new DateTimeZone('Asia/tokyo');
$da = new DateTIme('29-12-1989',$tz_tokyo);
var_dump($da);

//however timsone passed in datestring overrides timezone argument

$tz_tokyo = new DateTimeZone('Asia/tokyo');
$da = new DateTIme('29-12-1989 America/new_york',$tz_tokyo);
var_dump($da); // gives newyork instead of tokyo
echo $da->getTImeZOne()->getName();