<?php
	header('Content-Type:text/html;charset=utf-8');
	# if & switch
	
	#关系运算符
	// > < == != >= <= === !===
	
	$num = 2;
	#单个if

	/*if ($num<=4) 
		{echo "num的值一定小于或者等于4";}*/
	/*

	if ($num<=4) 
		echo "num的值一定小于或者等于4";
	echo "hello";
	*/

	#if else
	if ($num>=4) {
		echo "true";
	}else{
		echo "false";
	}


	#nesting if
	$num=4;
	if ($num>=4) {
		if ($num<=10) {
			echo "num一定在4到10之间";
		}else{
			echo "num一定大于10";
		}
	}else{
		echo "num一定小于4";
	}

	#逻辑运算符

	/*
		逻辑与   &&  AND
		逻辑或   ||	OR
		逻辑非   !	
		逻辑异或 XOR
	*/

	$num1 = 3;
	if ($num1 >3 XOR $num1 <10) {
		echo "num是大于3并且小于10";
	}
	/*
		AND:一假即假
		OR :一真即真
		XOR:只有一个为真,结果才为真
	*/

	#switch
	$favColor = 1;
	switch ($favColor) {
	//js中case判断的是"===";
		case '1':
			echo "angry";
			break;
		case 'yellow':
			echo "happy";
			break;
		case 'blue':
			echo "silence";
			break;
		case 'green':
			echo "forgive";
			break;
		default:
			echo "GNU";
			break;
	}
 ?>