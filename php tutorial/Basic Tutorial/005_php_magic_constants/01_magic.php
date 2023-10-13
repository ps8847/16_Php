<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	print_r(__LINE__ ); //The current line number of the file.
	print_r(__FILE__  ); //The full path and filename of the file. If used inside an include, thename of the included file is returned. Since PHP4.0.2, __FILE__ always contains an absolute path whereas in olderversions it contained relative path under some circumstances.
	print_r(__FUNCTION__ ); //The function name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the function name as it was declared(case-sensitive). In PHP 4 its value is always lowercased.
	print_r(__CLASS__ ); //The class name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the class name as it was declared (case-sensitive). In PHP 4 its value is always lowercased.
	print_r(__METHOD__ ); //The class method name. (Added in PHP 5.0.0) The method name is returned as it was declared (case-sensitive).
	?>
</body>
</html>