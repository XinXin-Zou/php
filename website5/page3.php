<?php 
	$users=["name"=>"Henry","email"=>"henry@qq.com","age"=>30];
	#将数组转换为字符流
	$users=serialize($users);
	setcookie('users',$users,time()+86400);

	#反解析字符流
	$users=unserialize($_COOKIE['users']);
	print_r($users);
 ?>