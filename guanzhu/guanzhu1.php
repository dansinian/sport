<?php
// 关注
    header("Access-Control-Allow-Origin:*");
    $eassyName=$_POST['eassyName'].'|';
    $onlineName=$_POST['onlineName'];
    $result=mysql_connect("localhost","root","");
	if(!$result){
		die("打开数据库失败");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("打开数据库的空间失败");
	}
	$sql="select * from attentionlist where attentionName='$onlineName'";
	$res1=mysql_query($sql);
	if(mysql_num_rows($res1)==0){
		$sql2="INSERT Into  attentionlist(attentionName,attentionArr) values('$onlineName','$eassyName')";
		mysql_query($sql2);
		echo '成功关注';
	}else{
		$obj=mysql_fetch_assoc($res1);
		$res2=$obj['attentionArr'].$eassyName;
		$sql3="update attentionList set attentionArr='$res2' where attentionName='$onlineName'";
		$res3=mysql_query($sql3);
		echo '成功关注';
	}
?>