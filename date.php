<?php 
	// echo date(); # 至少要给一个参数
	echo date('d'); # day
	echo date('m'); # month
	echo date('Y'); # Year 2017 year 17
	echo date('l'); # day of week

	echo date('Y/m/d'); # 年月日
	echo date('d-m-Y'); # 日月年

	# 时分秒
	echo date('h'); # hour
	echo date('i'); # minutes
	echo date('s'); # seconds
	echo date('a'); # AM or PM

	# 设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date('h:i:sa');
	echo "<hr>";

	# mktime
	$timestamp=mktime(07,00,12,1,26,1997);
	echo $timestamp;//从1970年到设置时间的秒数
	echo "<hr>";

	# 完整的时间
	echo date("m/d/Y h:i:sa",$timestamp);
	echo "<hr>";

	# 字符串转时间
	$timestamp2=strtotime("7:00pm March 22 2017");
	$timestamp3=strtotime("tomorrow");
	$timestamp4=strtotime("next sunday");
	$timestamp5=strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp2);
	echo "<hr>";
	echo date("m/d/Y h:i:sa",$timestamp3);
	echo "<hr>";
	echo date("m/d/Y h:i:sa",$timestamp4);
	echo "<hr>";
	echo date("m/d/Y h:i:sa",$timestamp5);
 ?>