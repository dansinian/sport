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
    $coon=new mysqli("localhost","root","","projectdata");

	$sql="INSERT INTO actionlist(actionName,actionRegin,date1,date2,date3,date4,type,resource,descript,perNum) values('$actionName','$actionRegin','$date1','$date2','$date3','$date4','11111','$resource','$desc','$perNum')";
	$res=$coon->query($sql);
	if($res){
	   echo("ok");
	}else{
	   echo("no");
	}

?>