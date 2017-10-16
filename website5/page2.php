<?php 
header('Content-Type:text/html;charset=utf-8');	
	#重新赋值
	setcookie('username',"France",time()+86400);
	#删除cookie
	// setcookie('username',"gds",time()-3600);

	if (count ($_COOKIE)) {
		echo "一共有".count($_COOKIE)."个cookie";
	}else{
		echo "没有设置的cookie";
	}
	if (isset($_COOKIE['username'])) {
		echo "你的用户名是:".$_COOKIE['username'];
	}else{
		echo "用户名不存在";
	}
 ?>