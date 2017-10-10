<!-- <h1> -->

<?php 
	// echo "Hello World!";

	#注释
	//单行注释 快捷键:command + /
	# 单行注释 快捷键:shift + 3
	/*
		多行注释
		快捷键:alt +command + /
	*/

	# variable 变量
	$output = "Hello World!";
	echo $output;
	echo "<br>";
	
	/*
		- 前缀 $
		- 以字母/数字/下划线组成
		- 数字不能开头
		- 大小写敏感
		- 驼峰命名法
	*/

	#数据类型
	/*
		String  Integer  Float  Boolean  Array  Object  Resource(函数)
	*/
	$num=22;
	echo $num;
	$float=12.1;
	echo $float;
	$bool=true;
	echo $bool;//1
	$bool1=false;
	echo $bool1;//空

	#运算符
	$num1=10;
	$num2=20;
	$sum=$num1+$num2;
	echo $sum;//30

	#字符串拼接
	//逗号也可打印多个变量
	$string1="hello";
	$string2="world";
	// 在php中,+号就是+号,没有拼接功能
	// $greeting=$string1+$string2;
	$greeting=$string1." ".$string2."!";
	echo $greeting;

	#php中引号的区别
	// 单引中的内容是单纯的字符串
	$greeting2='$string1 $string2';
	echo $greeting2;
	//双引中的变量可以正常被解析
	$greeting3="$string1 $string2";
	echo $greeting3;

	#转义字符
	$string3='They\'re here';
	$string4="They're here";
	echo $string3;
	echo $string4;//不是一个方法,无返回值
	printf($string4.'<br>');//方法,有返回值,为1
	echo "<hr>";

	#常量
	define("GREETING", "WhatEver!");
	//常量的第三个参数为bool,true为不分大小写
	define("GREETING", "What   Ever  !",true);
	// echo greeting;
	var_dump(greeting);
 ?>	

<!-- </h1> -->

