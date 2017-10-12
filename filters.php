<div class="container">
<?php 
		//检查是否存在data的name属性
	if (filter_has_var(INPUT_POST,"data")) {
		// echo "data 存在";
		$email = $_POST["data"];
		// echo $email;
		#过滤掉不合法的字符
		$email=filter_var($email,FILTER_SANITIZE_EMAIL);
		echo $email;
		#验证是否是一个有效的邮箱
		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			echo "邮箱合法";
		}else{
			echo "邮箱不合法";
		}
		// if (filter_input(INPUT_POST,"data",FILTER_VALIDATE_EMAIL)) {
		// 	echo "邮箱合法";
		// }else{
		// 	echo "邮箱不合法";
		// }
	}else{
		echo "data 不存在";
	}

	/*
		审核(过滤掉不合法的字符)
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/

	//练习:

	#验证一个变量中的值,是否是合法的整型
	$var = "21";
	if (filter_var($var,FILTER_VALIDATE_INT)) {
		echo $var."是一个合法的整型";
	}else{
		echo "不合法";
	}

	#获取字符串中所有的数值
	$str="s4d354adada34d3a4sd3a";
	$str1=filter_var($str,FILTER_SANITIZE_NUMBER_INT);
	echo $str1;

	#特殊字符
	$var ="<script>alert(1)</script>";
	// echo $var;//弹出1
	echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);//打印所有

	#验证数组中每个元素
	//data2中的都是规定好的
	$filters = array(
		"data"=>FILTER_VALIDATE_EMAIL,
		"data2"=>array(
			'filter'=>FILTER_VALIDATE_INT,
			'options'=>array(
				'min_range'=>1,
				'max_range'=>150
			)
		)
	);
	print_r(filter_input_array(INPUT_POST,$filters));

	#验证form表单中input的内容,第一个input是Email,第二个input一定是数值,并且数值不能小于1,大于150
	if (filter_has_var(INPUT_POST,"data")) {
		$Email=$_POST["data"];
		$num=$_POST["data2"];
		if (filter_var($Email,FILTER_VALIDATE_EMAIL)) {
			echo "合法";
		}else{
			echo "不合法";
		}
		if (filter_var($num,FILTER_VALIDATE_INT)&&$num>=1&&$num<=150) {
			echo "正确";
		}else{
			echo "错误";
		}
	}
	$arr=array(
		"name"=>"henry",
		"age"=>"30",
		"email"=>"henry@qq.com"
	);
	$filters = array(
		"name"=>array(
			"filter"=>FILTER_CALLBACK,
			"options"=>"ucwords"
		),
		"age"=>array(
			"filter"=>FILTER_VALIDATE_INT,
			"options"=>array(
				"min_range"=>1,
				"max_rang"=>100,
			)
		),
		"email"=>FILTER_VALIDATE_EMAIL,
	);
	print_r(filter_var_array($arr,$filters));
	print_r($filters);
	
?>	

</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters /过滤器</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<br>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="data" class="form-control"><br>
			<input type="text" name="data2" class="form-control"><br>
			<button type="submit" class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
</body>
</html>