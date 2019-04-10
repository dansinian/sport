<?php
    // 查看所有的活动
	// actionlist
    // 使用对象：管理人员，普通人员，专业人数
    header("Access-Control-Allow-Origin:*");
	$result=mysql_connect("localhost","root","");
	if(!$result){
		die("未能打开数据库");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("数据空间没有打开");
	}
	$sql="select * from actionlist";
	mysql_query("set names utf8");
	$res=mysql_query($sql);
	if($res){
		if(mysql_num_rows($res)){
			$crr=[];
			for($i=1;$i<=mysql_num_rows($res);$i++){
				array_push($crr,mysql_fetch_assoc($res));
			}
			echo JSON_encode($crr);
		}else{
			echo "未能加载数据";
		}
	}

?>
