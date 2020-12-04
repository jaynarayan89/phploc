<?php
require '../error_config.php';

$ds = 'last month + 1 month - 2 hours';
$arr = date_parse($ds);
var_dump($arr);

echo (new DateTime($ds))->format(DATE_COOKIE);


try{

$ds = 'yesterday of 2011';
echo (new DateTime($ds))->format(DATE_COOKIE);

}catch( Exception $e)
{	echo '<hr><hr>'. $e->getMessage().'<hr>';
	var_dump(DateTime::getLastErrors());
	
}