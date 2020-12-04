<?php
class A {
  function aMethod() {
    return "aMethod from A";
  }
}

class B extends A {
  function aMethod() {
       return "aMethod from B, ".
       parent::aMethod();
  }
}

$a = new A;
echo($a->aMethod());
echo('<br>');
$b = new B;
echo($b->aMethod());
?>