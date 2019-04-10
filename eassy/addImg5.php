<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
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
	$sql="select * from eassy where eassyId='$eassyId'";
    $res21=mysql_query($sql);
    if($res21){
    	$obj=mysql_fetch_assoc($res21);
    	$json=json_encode($obj);
    	print_r($json);
    }
?>