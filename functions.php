<?php 
	header('Content-Type:text/html;charset=utf-8');
	# function : 函数 - 具有某一功能的代码块
	
	/*
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction()
	*/

	#注:
	//函数都有返回值,没return是undefined
	//函数没有被调用时未占内存
	//php中.函数的名字不分大小写

	#定义函数
	function simpleFunction(){
		echo "Hello World!";
	}
	#调用函数
	simplefunction();
	echo "<hr>";

	#有参数 无返回值
	//php中函数有参数要调用的话就要传参,否则要给默认参数
	function buy($money="20元"){
		echo $money."给了,没买东西,拿着钱跑了";
	}
	buy("10元");
	buy();
	echo "<hr>";

	#多参数,有返回值
	//return 结束当前代码块的代码,并把值返回
	function sumValue($num1,$num2=10){
		$sum=$num1+$num2;
		return $sum;
	}
	$result = sumValue(5);
	echo $result;
	echo "<hr>";

	#无参数 有返回值
	function buyDrink(){
		return "饭后的饮料!";
	}
	echo buyDrink();
	echo "<hr>";

	#函数传引用
	$myNum = 10;
	function addFive(&$num){
		// $myNum = 20;
		$num+=5;
		echo $num + 5;
	}
	addFive($myNum);//15
	echo $myNum;//拿到了myNum的引用,改变了内存中的数值.所以是15
 ?>