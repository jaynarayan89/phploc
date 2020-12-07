<?php
// setting error mode erro messages

$dbConnection= null;

$dsn = "mysql:host=localhost;dbname=school";
try{

	$dbConnection = new Pdo($dsn,"root","password");
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	// var_dump($dbConnection);
	$sql="insert into students(name,age,address) values('mrxx',100,'goa)";

	$affected = $dbConnection->exec($sql);
	echo "$affected rows inserted";

}catch(Exception $e)
{
	echo $e->getMessage();
}