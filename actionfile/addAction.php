<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
    $obj =$_GET['actionObj'];
   	$actionName=$obj['name'];
   	$actionRegin=$obj['region'];
   	$date1=$obj['date1'];
   	$date2=$obj['date2'];
   	$date3=$obj['date3'];
   	$date4=$obj['date4'];
   	$resource=$obj['resource'];
   	$desc=$obj['desc'];
   	$perNum=$obj['perNum'];


   	// 打开数据库
   	$result=mysql_connect("localhost","root","");
	if(!$result){
		die("打开数据库失败");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("打开数据库的空间失败");
	}

	$sql="INSERT INTO actionlist(actionName,actionRegin,date1,date2,date3,date4,type,resource,descript,perNum) values('$actionName','$actionRegin','$date1','$date2','$date3','$date4','11111','$resource','$desc','$perNum')";
	$res=mysql_query($sql);
	if($res){
	   echo("ok");
	}else{
	   echo("no");
	}

?>