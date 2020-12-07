<?php
// fetch method with fetch constant

$dbConnection= null;

$dsn = "mysql:host=localhost;dbname=school";
try{

	$dbConnection = new Pdo($dsn,"root","password");

}catch(Exception $e)
{
	echo $e->getMessage();
}

// var_dump($dbConnection);

$sql="select * from students limit 2";

try {

	$statement = $dbConnection->query($sql);
	// var_dump($statement->fetch());
	

$statement->setFetchMode(PDO::FETCH_ASSOC);

	// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
	// $result = $statement->fetchAll(PDO::FETCH_NUM);
	// $result = $statement->fetchAll(PDO::FETCH_BOTH); //this is default
	$result = $statement->fetchAll(); 
	var_dump($result);

} catch (Exception $e) {
	echo $e->getMessage();	
}
