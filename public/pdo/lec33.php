<?php 
include_once 'pdo_connect.php';

if($dbConnection)
{
	$sql = "select * from students";
	foreach($dbConnection->query($sql) as $row)
	{
		var_dump($row);
	}
}
else{
	echo "not conected";
}