<br>
<hr>
<h3> Calling Private Members  </h3>
<hr>
<br>

<?php
class MyClass {

 private $car = "skoda";
 var $driver = "SRK";
 function __construct($par) {
 // Statements here run every time an instance of the class is created.
 }
 function myPublicFunction() {
 return("I'm visible!");
 }
 private function myPrivateFunction() {
 return("I'm not visible outside!");
 }
}
?>

<br>
<hr>
<h3> Protectected Members </h3>
<hr>
<br>

<?php

class MyClass {
 protected $car = "skoda";
 var $driver = "SRK";
 function __construct($par) {
 // Statements here run every time
 // an instance of the class
 // is created.
 }
 function myPublicFunction() {
 return("I'm visible!");
 }
 protected function myPrivateFunction() {
 return("I'm visible in child class!");

 }
}

?>

<br>
<hr>
<h3> Protectected Members </h3>
<hr>
<br>