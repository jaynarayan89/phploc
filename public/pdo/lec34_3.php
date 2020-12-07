<?php
// fetch method 

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
	// var_dump($statement->fetch());
	
	$result = $statement->fetchAll();
	var_dump($result);

} catch (Exception $e) {
	echo $e->getMessage();	
}
