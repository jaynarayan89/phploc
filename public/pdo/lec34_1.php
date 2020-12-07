<?php

$dbConnection= null;
$dsn = "mysql:host=localhost;dbname=school";
try{

	$dbConnection = new Pdo($dsn,"root","password");

}catch(Exception $e)
{
	echo $e->getMessage();
}

// var_dump($dbConnection);

$sql="select * from students where address='vapi'";

try {

	$statement = $dbConnection->query($sql);
	var_dump($statement);
	
	foreach( $statement as $row)
	{
		var_dump($row);
	}

} catch (Exception $e) {
	echo $e->getMessage();	
}
