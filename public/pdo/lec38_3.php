<?php
// getting connection attributes

$dbConnection= null;

$dsn = "mysql:host=localhost;dbname=school";
try{

	$dbConnection = new Pdo($dsn,"root","password");
	$attributes = array(
    "AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
    "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
    "TIMEOUT"
	);

	foreach ($attributes as $val) {
	    echo "PDO::ATTR_$val: ";
	    echo $dbConnection->getAttribute(constant("PDO::ATTR_$val")) . "<hr>";
	}


}catch(Exception $e)
{
	echo $e->getMessage();
}