<?php
require '../error_config.php';

$ids =  DateTImeZOne::listIdentifiers();
echo count($ids);
// var_dump($ids);

$ids = DateTImeZOne::listIdentifiers(DateTimeZone::PER_COUNTRY,'IN');
// var_dump($ids);

foreach($ids as $id)
{
	$tz = new DateTimeZone($id);

	var_dump($id,$tz->getLocation()['comments']);
}
