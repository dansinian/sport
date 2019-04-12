<?php
// 关注
    header("Access-Control-Allow-Origin:*");
    $eassyName=$_POST['eassyName'];
    $onlineName=$_POST['onlineName'];
     // 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="select * from attentionlist where attentionName='$onlineName'";
	$res1=$coon->query($sql);
	if($res1->num_rows==0){
		$arr=[];
		array_push($arr,$eassyName);
		$str1=json_encode($arr);
		$sql2="INSERT Into  attentionlist(attentionName,attentionArr) values('$onlineName','$str1')";
		$coon->query($sql2);
		echo '成功关注';
	}else{
		$obj=$res1->fetch_assoc();
		$res2=json_decode($obj['attentionArr']);
		array_push($res2,$eassyName);
		$res3=json_encode($res2);
		$sql3="update attentionList set attentionArr='$res3' where attentionName='$onlineName'";
		$res4=$coon->query($sql3);
		echo '成功关注';
	}
?>