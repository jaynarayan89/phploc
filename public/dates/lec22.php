<?php
require '../error_config.php';

class TheDate extends DateTime{
	public function __toString()
	{
		return $this->format(Self::COOKIE).'<br/>';
	}

	public static function createFromFormat($format, $time, $tz = null)
    {
     

        $ans = parent::createFromFormat(...func_get_args());
         return $ans;
    }
}

$z = new TheDate;
var_dump($z);

$x = TheDate::createFromFormat('d/m/y','29/12/89');
var_dump($x);
// var_dump(TheDate::getLastErrors());

/*
$x = DateTIme::createFromFormat('dS M Y','3rd july 2000');

var_dump($x);

$x = DateTIme::createFromFormat('dS M Y|','3rd july 2000');

var_dump($x);

// get current date 

$x = DateTIme::createFromFormat('','');

var_dump($x);

// get unix epoch 

$x = DateTIme::createFromFormat('|','');



$x = TheDate::createFromFormat('d/m/y!','29/12/89');
var_dump($x);

$x = TheDate::createFromFormat('d/m!/y','29/12/89');
var_dump($x);

//returns false
$x = TheDate::createFromFormat('!','29/12/89');
var_dump($x);

//return unix epoch
$x = TheDate::createFromFormat('!','');
var_dump($x);

$x = TheDate::createFromFormat('Y#m#d','2000/1/14');
var_dump($x);
$x = TheDate::createFromFormat('Y#m#d','2000.1/14');
var_dump($x);


$x = TheDate::createFromFormat('Y*m*d+','2000+1+15');
var_dump($x);
*/