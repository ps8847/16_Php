PHP Local Variables 

<?php
$x = 4;

function assignx () {
$x = 0;
print "\$x inside function is $x . 
";
}
assignx();
print "\$x outside of function is $x.
";
?>

<br>
PHP Function Parameters
<br>
<?php
// multiply a value by 10 and return it to the caller
function multiply ($value) {
 $value = $value * 10;
 return $value;
}
$retval = multiply (10);
Print "Return value is $retval\n";
?>

<br>
PHP Global Variables
<br>

<?php
$somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();
?>

<br>
Php static variable
<br>

<?php
function keep_track() {
 STATIC $count = 0;
 $count++;
 print $count;
 print "
";
}
keep_track();
keep_track();
keep_track();
?>

