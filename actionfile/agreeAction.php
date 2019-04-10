<?php
    // 确定活动举行,是defineaction
	//defineaction
	//管理人员
    header("Access-Control-Allow-Origin:*");
    $name=$_GET['name']
	$result=mysql_connect("localhost","root","");
	if(!$result){
		die("未能打开数据库");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("数据空间没有打开");
	}
	$sql="INSERT INTO defineaction(defineName,defindpart) values('$name','true')";
	mysql_query("set names utf8");
	$res=mysql_query($sql);
	if($res){
		echo "确定活动举行"
	}else{
		echo "跳转出现错误"
	}
?>
