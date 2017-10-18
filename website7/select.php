<?php 
header('Content-Type:text/html;charset=utf-8');	
	
	/*操作数据库
	1.连接数据库
	2.执行sql语句
	3.获取数据并使用
	4.断开连接
	*/
	function selectData($sql){
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

		// var_dump($result);
		if ($result->num_rows) {
			//以关联数组的形式查找所有数据
			$data=$result->fetch_all(MYSQLI_ASSOC);
			//默认是下标数组
			//print_r($data);
			//转json数据
			echo json_encode($data);
		}
		#断开连接
		$mysqli->close();
	}
	#准备sql语句
	$sql="SELECT * FROM customers";
	selectData($sql);
 ?>