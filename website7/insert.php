<?php 
header('Content-Type:text/html;charset=utf-8');	
	
	/*操作数据库
	1.连接数据库
	2.执行sql语句
	3.获取数据并使用
	4.断开连接
	*/
	

	function insertData($sql){
		#连接数据库
		$mysqli=new mysqli("localhost","root","","people");
		#测试是否连接成功
		//不是0就报错,连接失败
		if($mysqli->connect_errno){
			die($mysqli->connect_error);
		}
		
		#设置utf8
		$mysqli->query("set names utf8");
		#执行sql语句
		$result=$mysqli->query($sql);

		if ($result) {
			echo "插入成功";
		}else{
			echo "插入失败";
		}
		#断开连接
		$mysqli->close();
	}
	#准备sql语句
	$sql="INSERT INTO customers(name,email,address,city,state) VALUES('鑫鑫','xx@qq.com','定泗路','北京','昌平区')";
	insertData($sql);

 ?>