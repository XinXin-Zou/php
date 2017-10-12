<div class="container">
<?php 
	// echo $_GET["sbqname"];
	// echo $_GET["sbqemail"];
	
	# $_GET[]
	//检查sbqname是否能获取到
	//用户已点击提交
	// if(isset($_GET['sbqname'])){
	// 	// echo $_GET['sbqname'];
	// 	$name=$_GET["sbqname"];
	// 	$email=$_GET["sbqemail"];
	// 	echo $name." : ".$email;
	// }
	
	# $_POST[]
	// if(isset($_POST['sbqname']) && isset($_POST['sbqemail'])){
	// 	// echo $_POST['sbqname'];
	// 	$name=$_POST["sbqname"];
	// 	$email=$_POST["sbqemail"];
	// 	// empty 有值为假
	// 	if (!empty($name) && !empty($email)) {
	// 		echo $name." : ".$email;
	// 	}
	// 	print_r($_POST);
	// }
	
	# $_REQUEST
	//get & post 的值都可以得到
	if(isset($_REQUEST['sbqname']) && isset($_REQUEST['sbqemail'])){
		// echo $_REQUEST['sbqname'];
		$name=$_REQUEST["sbqname"];
		$email=$_REQUEST["sbqemail"];
		// empty 有值为假
		if (!empty($name) && !empty($email)) {
			echo $name." : ".$email;
		}
		print_r($_REQUEST);
	}

	#查询url地址后面的参数
	//必须是get
	echo $_SERVER["QUERY_STRING"];
 ?>


</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<!-- 提交到当前路径 -->
		<!-- method可写可不写,默认为get,可在url中改变数据,传递的大小有限制 -->
		<!-- post安全系数高,传递的大小比较大 -->
		<form action="get_post.php" method="get">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="sbqname" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="sbqemail" class="form-control">
			</div>
			<br>
			<input class="btn btn-primary btn-block" type="submit" value="提交"></input>
		</form>

		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?sbqname=邹鑫鑫"; ?>" class="btn btn-success btn-block">
					邹鑫鑫
				</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?sbqname=孙帅"; ?>" class="btn btn-info btn-block">
					孙帅
				</a>
			</li>
		</ul>

		<h1>
			<?php if(isset($_GET['sbqname'])){echo $_GET['sbqname'];} ?>	
		</h1>
	</div>
</body>
</html>