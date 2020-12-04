<?php
require '../error_config.php';

class TheDate extends DateTime
{

    protected $format = self::COOKIE;

    public function atom()
    {
        $this->format = self::ATOM;
    }

    public function rss()
    {
        $this->format = self::RSS;
    }

    public function mdy()
    {
        $this->format = 'm * d * Y';
    }

    public function europe()
    {
        $this->format = 'd.m.Y';
    }

    public function __toString()
    {
        return $this->format($this->format).'<hr>';
    }
}

$d =  new TheDate;
echo $d;

$d->rss();
echo $d;

$d->europe();
echo $d;

$d->atom();
echo $d;

$d =  new TheDate('29.12.1989');
echo $d;

$d->rss();
echo $d;

$d->europe();
echo $d;

$d->atom();
echo $d;

