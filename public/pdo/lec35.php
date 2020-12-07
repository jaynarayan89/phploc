<?php
// rowcount

$dbConnection= null;

$dsn = "mysql:host=localhost;dbname=school";
try{

	$dbConnection = new Pdo($dsn,"root","password");

}catch(Exception $e)
{
	echo $e->getMessage();
}

// var_dump($dbConnection);

$sql="select * from students";

try {

	$statement = $dbConnection->query($sql);
	var_dump($statement->rowCount());
	
	//using query method
	$sql="select count(*) from students";
	$statement = $dbConnection->query($sql);
	var_dump($state)

} catch (Exception $e) {
	echo $e->getMessage();	
}
