<?php
// 查看一个人关注的所有的人
   header("Access-Control-Allow-Origin:*");
    $attentionName=$_POST['attentionName'];
     // 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="select * from attentionlist where attentionName='$attentionName'";
	$res1=$coon->query($sql);
	$res2=$res1->fetch_assoc();
	$res3=$res2['attentionArr'];
	echo json_encode($res3);
?>