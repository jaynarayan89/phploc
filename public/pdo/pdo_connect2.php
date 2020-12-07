<?php
$dbname='school';
$user = 'root';
$pwd='password';

$dsn = "mysql:host=localhost;dbname=$dbname";
try{

	$pdo = new pdo($dsn,$user,$pwd);

}catch(Exception $e)
{
	echo $e->getMessage();
}

var_dump($pdo);