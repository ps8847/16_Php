<li>
$_FILES['file']['tmp_name']- the uploaded file in the temporary directory on
the web server.
</li> 
<li>
$_FILES['file']['name'] - the actual name of the uploaded file.
</li>
<li>
$_FILES['file']['size'] - the size in bytes of the uploaded file.
</li> 
<li>
$_FILES['file']['type'] - the MIME type of the uploaded file.
</li>
<li>
$_FILES['file']['error'] - the error code associated with this file upload.
</li> 

<br>
<br>
<?php


if( $_FILES['file']['name'] != "" )
{
 copy( $_FILES['file']['name'], "/var/www/html" ) or
 die( "Could not copy file!");
}
else
{
 die("No file specified!");
}
?>
<html>
<head>
<title>Uploading Complete</title>
</head>
<body>

<ul>
<li>Sent file: <?php echo $_FILES['file']['name']; ?>
<li>File size: <?php echo $_FILES['file']['size']; ?> bytes
<li>File type: <?php echo $_FILES['file']['type']; ?>
</ul>
</body>
</html>