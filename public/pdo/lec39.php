<?php
// quote()
$dbConnection= null;

$dsn = "mysql:host=localhost;dbname=school";
try{

	$dbConnection = new Pdo($dsn,"root","password");
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	$searchTerm = '%'.$_GET['city'].'%';

	// var_dump($dbConnection);
	$sql="select * from students where address like".$dbConnection->quote($searchTerm); 

	$result = $dbConnection->query($sql);
	var_dump($result->fetchAll(PDO::FETCH_ASSOC));

}catch(Exception $e)
{
	echo $e->getMessage();
}