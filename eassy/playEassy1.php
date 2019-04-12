<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
 	$coon=new mysqli("localhost","root","","projectdata");
		// 建立新的完整数据
	$sql="select * from eassy";
	$findSql=$coon->query($sql);
	if($findSql){
		if($findSql->num_rows){
			$arr=[];
			for($i=1;$i<=$findSql->num_rows;$i++){
				array_push($arr,$findSql->fetch_assoc());
			}
			print_r(JSON_encode($arr));	
		}
	}else{
		die("数据库表中没有查询到任何信息");
	}
?>