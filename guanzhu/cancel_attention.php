<?php
//取消关注
	header("Access-Control-Allow-Origin:*");
	$attentionName=$_POST['attentionName'];
    $name=$_POST['name'];
   // 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="select * from attentionlist where attentionName='$attentionName'";
	$res1=$coon->query($sql);
	$res2=$res1->fetch_assoc();
	$res3=json_decode($res2['attentionArr']);
	for($i=0;$i<count($res3);$i++){
		if($res3[$i]==$name){
			array_splice($res3,$i, 1);
			break;
		}
	}
	$arrres=json_encode($res3);
	$sqm="update attentionlist set attentionArr='$arrres' where attentionName='$attentionName'";
	$resm=$coon->query($sqm);
	$success="操作成功";
	if($resm){
		echo $success;
	}

?>