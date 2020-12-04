<?php
require '../error_config.php';

// the problem

$date1 = new DateTIme('29.12.1989');
$date2 = $date1->modify('+1 month');

echo $date1->format('d ,m ,Y').'</br>';
echo $date2->format('d ,m ,Y').'</br>';

var_dump($date1 === $date2);

// solution 1 


$date1 = new DateTIme('29.12.1989');
$date2 = clone $date1;

$date2->modify('+1 month');

echo $date1->format('d ,m ,Y').'</br>';
echo $date2->format('d ,m ,Y').'</br>';

var_dump($date1 === $date2);

// solution 2 

$date1 = new DateTimeImmutable('29.12.1989');
$date2 = $date1->modify('+1 month');

echo $date1->format('d ,m ,Y').'</br>';
echo $date2->format('d ,m ,Y').'</br>';

var_dump($date1 === $date2);
