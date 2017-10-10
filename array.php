<?php 

	#array: 数组 - 存储一堆数据的集合  有效的控制资源
	/*
		下标数组: 下标以0开始
		关联数组: 关联以第一个名字开头
	*/

	#下标数组

	// 创建数组的两种方法
	$people = array("Kevin","Henry","Hemiah");
	echo $people[1];	//"Henry"
	// echo $people[4];//数组越界

	$ids=[23,56,42];
	echo $ids[2];

	$cars=["Honda","Toyota","BYD"];
	$cars[3]="BWM";
	echo $cars[3];

	#打印当前数组元素的个数
	echo count($cars);

	#打印数组的方法
	print_r($cars);

	#万能打印方法
	var_dump($cars);

	#关联数组
	$people2=array("Henry"=>35,"Bukcy"=>25,"Emily"=>20);
	echo $people2["Emily"];

	$ids2=[22=>"Henry",25=>"Bukcy"];
	echo $ids2[22];

	$ids2[35]="Emily";
	echo $ids2[35];
	print_r($ids2);

	#观察
	$cars[]="Bence";
	print_r($cars);

	$ids2[]="john";
	print_r($ids2);

	$people2[]=55;
	print_r($people2);

	#多维数组
	$cars2 = array(
		array("Honda",20,10),
		array("dz",20,20),
		array("Ford",15,10)
	);
	echo $cars2[2][1];
	// $cars=[[],[],[]]
 ?>