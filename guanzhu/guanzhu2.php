<?php
// 点赞
    header("Access-Control-Allow-Origin:*");
	$success=true;
	$error=false;
	$eassyId=$_POST['eassyId'];
	$clickbool=$_POST['clickbool'];
	// 数据库的连接
	 $result=mysql_connect("localhost","root","");
	if(!$result){
		die("打开数据库失败");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("打开数据库的空间失败");
	}
	// // 业务
	$sql="select * from eassy where eassyId='$eassyId'";
	$res1=mysql_query($sql);
	$result1=mysql_fetch_assoc($res1);
	if($clickbool==true){
		$pernum=$result1['eassy_gulinum']+1;
	}else{
		$pernum=$result1['eassy_gulinum']-1;
	}
	$sql2="update eassy set eassy_gulinum='$pernum' where eassyId='$eassyId'";
	mysql_query($sql2);
?>