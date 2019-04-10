<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
  	$result=mysql_connect("localhost","root","");
	if(!$result){
		die("打开数据库失败");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("打开数据库的空间失败");
	}
		// 建立新的完整数据
	$sql="select * from eassy";
	$findSql=mysql_query($sql);
	if($findSql){
		if(mysql_num_rows($findSql)){
			$arr=[];
			for($i=1;$i<=mysql_num_rows($findSql);$i++){
				array_push($arr,mysql_fetch_assoc($findSql));
			}
			print_r(JSON_encode($arr));	
		}
	}else{
		die("数据库表中没有查询到任何信息");
	}
?>