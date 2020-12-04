<?php
require '../error_config.php';

class student{
	public function __get($p)
	{
		echo $p;
	}

	public function __set($p,$v)
	{
		echo "$p -> $v ";
	}
}

$s = new student;
$s->full_name = 'loy';