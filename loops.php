<?php 
	# loops: 循环 - 让项目制作的更高效
	# 根据某个条件重复执行某段代码
	/*
		-For
		-While
		-Do...While
		-Foreach
	*/

	# For 循环(已知循环次数)
	# @params - init,condition,inc
	for($i=0;$i<10;$i++){
		echo ($i+1)."<br>";
	}

	# While 循环(未知循环次数)
	# @params - condition
	$i=0;
	while ($i<10) {
		echo $i."<br>";
		$i++;
	}
	
	# do..while
	# @params - condition
	$i=0;
	do{
		echo $i."<br>";
		$i++;
	}while ($i<10);


	# foreach 循环 下标数组
	$people=array("Henry","Bucky","Emily");
	foreach ($people as $person) {
		echo $person;
		echo "<br>";
	}

	#foreach 循环 关联数组
	$people = array(
		"Henry"=>"Henry@gmail.com",
		"Bucky"=>"bucky@gmail.com",
		"Emily"=>"emily@gmail.com",
	);
	foreach ($people as $person => $email) {
		echo $person.":".$email;
		echo "<br>";
	}

	/*	
		练习1
		打印1~100之间7的倍数
		打印1~100之间个位为7的数
		打印1~100之间十位为7的数
		打印1~100之间个位不为7,十位不为7,以及不是7的倍数
		
		练习2
		打印九九乘法表
	*/
 ?>