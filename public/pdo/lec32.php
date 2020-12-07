<?php 
include_once 'pdo_connect.php';

if($dbConnection)
{
	echo "connected";
}
else{
	echo "not conected";
}