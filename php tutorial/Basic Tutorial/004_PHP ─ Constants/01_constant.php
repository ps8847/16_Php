<?php
define("MINSIZE", 50);
echo MINSIZE;
echo constant("MINSIZE"); // same thing as the previous line
?>

<br>
Valid php Constants 
<br>

<li> 
	define("ONE", "first thing");
</li>
<li>
	define("TWO2", "second thing");
</li>

<li>
	define("THREE_3", "third thing");
</li>

<br>
Invalid Php Constants
<br>

<li>
	define("2TWO", "second thing");
</li>

<li>
	define("__THREE__", "third value");
</li>
	
