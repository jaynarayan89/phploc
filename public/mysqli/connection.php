<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$con = new mysqli('localhost','root','password','lynda');


//var_dump($con->connect_error ?: '' );

if($con->connect_error)
{
	echo $con->connect_error;	
}

var_dump($con);

