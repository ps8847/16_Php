<!--PHP ─ Variable Types-->


<html>
	<body>
Integers :
<br>
		<?php
		$int_var = 12345;
		$another_int = -12345 + 12345;
		echo $another_int;
		?>

<br>
Doubles : 
<br>
		<?php
		$many = 2.2888800;
		$many_2 = 2.2111200;
		$few = $many + $many_2;
		//print($many + $many_2 = $few<br>.);
		?>
<br>
Boolean : 
<br>
		<?php
		if (TRUE)
		print("This will always print<br>");
		else
		print("This will never print<br>");

		$true_num = 3 + 0.14159;
		$true_str = "Tried and true";
		$true_array[49] = "An array element";
		$false_array = array();
		$false_null = NULL;
		$false_num = 999 - 999;
		$false_str = "";
		?>

<br>
NULL
<br>
		<?php
		$my_var = null;
		?>

<br>
Strings 
<br>

		<?php
		$string_1 = "This is a string in double quotes";
		$string_2 = "This is a somewhat longer, singly quoted string";
		$string_39 = "This string has thirty-nine characters";
		$string_0 = ""; // a string with zero characters


		$variable = "name";
		$literally = 'My $variable will not print!\\n';
		print($literally);
		$literally = "My $variable will print!\\n";
		print($literally);

		?>

<br>
Escape sequence 
<br>

		<ul> 
			\n is replaced by the newline character <br>
			\r is replaced by the carriage-return character <br>
			\t is replaced by the tab character <br>
			\$ is replaced by the dollar sign itself ($) <br>
			\" is replaced by a single double-quote (") <br>
			\\ is replaced by a single backslash (\) <br>
		</ul>


		
</body>
</html>