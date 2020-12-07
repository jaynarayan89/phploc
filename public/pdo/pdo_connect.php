<?php

$dsn = "mysql:host=localhost;dbname=school";
try{

	$dbConnection = new pdo($dsn,"root","password");

}catch(Exception $e)
{
	echo $e->getMessage();
}

