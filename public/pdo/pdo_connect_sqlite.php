<?php

$dsn = "sqlite:/home/jay/Documents/projects/php.loc/public/pdo/db.sqlite";
try{

	$pdo = new pdo($dsn);

}catch(Exception $e)
{
	echo $e->getMessage();
}

var_dump($pdo);