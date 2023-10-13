<?php
//try {
// $error = 'Always throw this error';
// throw new Exception($error);

// // Code following an exception is not executed.
// echo 'Never executed';

//} catch (Exception $e) {

// echo 'Caught exception: ', $e->getMessage(), "\n";
//}

//// Continue execution
//echo 'Hello World';
?>


<?php

function exception_handler($exception) {
 echo "Uncaught exception: " , $exception->getMessage(), "\n";
}
set_exception_handler('exception_handler');
throw new Exception('Uncaught Exception');
echo "Not Executed\n";

?>

