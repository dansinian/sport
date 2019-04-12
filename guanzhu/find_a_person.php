<?php
// 查看一个人的所有信息
   header("Access-Control-Allow-Origin:*");
    $userAccount=$_POST['userAccount'];
     // 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="select * from userlist where userAccount='$userAccount'";
	$res1=$coon->query($sql);
	$res2=$res1->fetch_assoc();
	echo json_encode($res2);
?>