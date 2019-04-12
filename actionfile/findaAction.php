<?php
 //    查看一个活动
	// actionlist
	// 管理人员，普通人员，专业人数
    header("Access-Control-Allow-Origin:*");
    $name=$_GET['name'];
	// 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");

	$sql="select * from actionlist where actionName='$name'";
	$res=$coon->query($sql);
	if($res){
		$obj=json_encode($res->fetch_assoc());
		echo $obj; 
	}else{
		echo "跳转出现错误";
	}
?>
