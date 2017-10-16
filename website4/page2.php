<?php

	session_start();
	$name=isset($_SESSION['name']) ? $_SESSION['name']:'name属性不存在';
	print_r($_SESSION);


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Page 2</title>
 </head>
 <body>
 	<h2>你的名字是:<?php echo $name; ?></h2>
 	<a href="page3.php">Go to page 3</a>
 </body>
 </html>