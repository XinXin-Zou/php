<?php 

	header('Content-Type:text/html;charset=utf-8');
	# string functin: 处理字符串的函数

	# 返回字符串的一部分 substr
	$output="HelloWorld";
	// $output = substr($output,1,5);
	// echo $output;
	echo "<hr>";

	# 返回给定的字符串 string 的长度  strlen
	echo strlen($output);
	echo "<hr>";

	# 查找字符串首次出现的位置 strpos
	// $output = strpos($output,"lo");//3
	// echo $output;
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	$output =strrpos($output,"l");
	echo $output;
	echo "<hr>";

	# 去除首尾空格trim
	$output = "  helloworld  ";
	echo strlen($output);//14
	$newString= trim($output);
	echo strlen($newString);//10
	echo "<hr>";
	
	# 将字符串转为大写 strtoupper
	$str="hello world";
	$newstr=strtoupper($str);
	echo $newstr;
	
	# 将字符串转为小写 strtolower
	$lowerstr=strtolower($newstr);
	echo $lowerstr;
	echo "<hr>";
	
	# 将每个单词首字母大写 ucwords
	$ucword=ucwords($str);
	echo $ucword;
	echo "<hr>";

	# 替换所有匹配的内容  str_replace
	$text = "Hello World";
	$output =str_replace("World","Everybody",$text);
	echo $output;
	echo "<hr>";

	# 判断是否是字符串  is_string
	$val='22';
	$output = is_string($val);
	echo $output;
	echo "<hr>";

	# 过滤掉数组中非字符串的值
	$values=array(true,false,"Hello",34,"84",12.3,"45.6",'',' ',0,'0');
	foreach ($values as $value) {
		#判断value是否是字符串,如果是,那么输出!
		if (is_string($value)) {
			echo $value."is a string!<br>";
		}
	}

	# 压缩字符串  gzcompress
	$string = "一大堆文字";
	$compressed = gzcompress($string);
	echo $compressed;

	# 解压字符串
	$unCompressed = gzuncompress($compressed);
	echo $unCompressed;

 ?>