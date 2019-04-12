<?php
    // 确定活动举行,是defineaction
	//defineaction
	//管理人员
    header("Access-Control-Allow-Origin:*");
    $name=$_GET['name']
		// 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");

	$sql="INSERT INTO defineaction(defineName,defindpart) values('$name','true')";
	$res=$coon->query($sql);
	if($res){
		echo "确定活动举行"
	}else{
		echo "跳转出现错误"
	}
?>
