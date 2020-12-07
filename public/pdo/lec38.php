<?php
// erro messages

$dbConnection= null;

$dsn = "mysql:host=localhost;dbname=school";
try{

	$dbConnection = new Pdo($dsn,"root","password");

}catch(Exception $e)
{
	echo $e->getMessage();
}

// var_dump($dbConnection);

$sql="insert into students(name,age,address) values('mrxx',100,'goa')";

try {

	$affected = $dbConnection->exec($sql);

	$errors = $dbConnection->errorInfo();
	if($errors)
	{
		var_dump($errors[2]);
	}else{

		echo "$affected rows inserted";
	}
} catch (Exception $e) {
	echo $e->getMessage();	
}
