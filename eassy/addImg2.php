<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
    $defaultArr=$_POST['defaultArr'];
    $eassyId=$_POST['eassyId'];
  	$result=mysql_connect("localhost","root","");
	if(!$result){
		die("打开数据库失败");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("打开数据库的空间失败");
	}
		// 建立新的完整数据
	$sql="update eassy set eassyArr='$defaultArr' where eassyId='$eassyId'";
    $res21=mysql_query($sql);
?>