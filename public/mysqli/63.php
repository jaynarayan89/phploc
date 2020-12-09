<?php

$con = new mysqli('localhost','root','password','lynda');

$sql = "select * from tasks";

$r = $con->query($sql);

var_dump($r);
echo $r->num_rows;