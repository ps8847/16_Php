<br>
	<br>
		Multi-lines printing: Here are the examples to print multiple lines in a single print
		statement:
		<?php
		# First Example
		$variable = 'heyy';
		print <<<END
		This uses the "here document" syntax to output
		multiple lines with $variable interpolation. Note
		that the here document terminator must appear on a
		line with just a semicolon no extra whitespace!
		END;
		# Second Example
		print "This spans
		multiple lines. The newlines will be
		output as well";
		?>