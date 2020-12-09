<?php

$con = new mysqli('localhost','root','password','lynda');

$sql = "select * from tasks";

$result_set = $con->query($sql);
/*
while($row = $result_set->fetch_array())
{
	var_dump($row);
}

while($row = $result_set->fetch_assoc())
{
	var_dump($row);
}

while($row = $result_set->fetch_row())
{
	var_dump($row);
}*/

$arr = $result_set->fetch_all(MYSQLI_ASSOC);
var_dump($arr);
