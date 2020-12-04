<?php
require '../error_config.php';


function gen()
{
	for($i=-555555; $i<9999999999999;$i++) yield $i;
}

foreach(gen() as $i) echo $i;