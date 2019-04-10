<?php
    // 确定人员参加活动
	// defineaction
    //使用对象：普通人员或者专业人士
    header("Access-Control-Allow-Origin:*");
    $defineName=$_GET['actionName'];//活动的名称
    $definePerson=$_GET['definePerson'];//活动的人员
	$result=mysql_connect("localhost","root","");
	if(!$result){
		die("未能打开数据库");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("数据空间没有打开");
	}
	$sql="select * from defineaction where defineName='$defineName'";
	mysql_query("set names utf8");
	$res=mysql_query($sql);
	if($res){//有此活动
		$obj=$mysql_fetch_assoc($res));
		// 取到人名的数组
		$arr=json_decode(($obj.defineArr)
		$json=json_encode((array_push($arr, $definePerson));
		$sql1="update defineaction set defineArr=$json where defineName='$defineName'";
		$res1=mysql_query($sql);
		if($res1){
			echo "参加活动已经报名"
		}else{
			echo "抱歉，报名未成功，请请重新操作"
		}
	}else{
		echo "跳转出现错误"
	}
?>
