<?php
require '../error_config.php';

// echo stripos("I love php, I love php too!","PHP");
echo strchr("I love php, I love php too!","php");
echo "<br>";
echo strchr("I love php, I love php too!","love");

$l = strspn("012345678",'0112311');echo "$l<br>";