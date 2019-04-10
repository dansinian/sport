<?php
 //    查看一个活动
	// actionlist
	// 管理人员，普通人员，专业人数
    header("Access-Control-Allow-Origin:*");
    $name=$_GET['name'];
	$result=mysql_connect("localhost","root","");
	if(!$result){
		die("未能打开数据库");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("数据空间没有打开");
	}
	$sql="select * from actionlist where actionName='$name'";
	mysql_query("set names utf8");
	$res=mysql_query($sql);
	if($res){
		$obj=json_encode(mysql_fetch_assoc($res));
		echo $obj; 
	}else{
		echo "跳转出现错误";
	}
?>
