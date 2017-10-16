<?php 
	if(isset($_POST['submit'])){
		session_start();
		// echo '123';
		$_SESSION['name']=$_POST['name'];
		$_SESSION['email']=$_POST['email'];
		// print_r($_SESSION);
		header("location: page2.php");//跳转
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page1</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="email" placeholder="enter email">
		<input type="submit" name="submit" value="提交">
	</form>
</body>
</html>