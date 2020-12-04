<?php
require '../error_config.php';

echo date_default_timezone_get();
date_default_timezone_set('America/New_York');
$now = new DateTime;

echo $now->format(DateTime::RSS);

echo '<br>';
date_default_timezone_set('Asia/kolkata');
$now = new DateTime;

echo $now->format(DateTime::RSS);

echo '<hr>';
echo (new DateTime('29.12.70'))->format(DateTime::COOKIE);

echo '<hr>';
echo (new DateTime('29-12-1970'))->format(DateTime::COOKIE);
echo '<hr>';

echo (new DateTime('12/29/70'))->format(DateTime::COOKIE);

echo '<hr>';

echo (new DateTime('last sunday + 2 days'))->format(DateTime::COOKIE);

echo '<hr>';

echo (new DateTime('last sunday of december 2019'))->format(DateTime::COOKIE);
echo '<hr>';

echo (new DateTime('29.12.18'))->format(DateTime::COOKIE);
echo '<hr>';

echo (new DateTime('29.12.89'))->format(DateTime::COOKIE);

echo '<hr>';
echo (new DateTime('29.12.20'))->format(DateTime::COOKIE);

echo '<hr>';
echo '<hr>';
echo (new DateTimE('1960-12-01'))->format(DateTime::COOKIE);