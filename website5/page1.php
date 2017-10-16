<?php 

	#监听用户是否触发了sumbit方法
	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		setcookie('username',$username,time()+86400);
		header("location: page2.php");
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="username" placeholder="enter your name">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>