<?php
//确定关于的页面
// 表attentionList
// 添加关注
$eassyName=$_POST['eassyName'];
$onlineName=$_POST['onlineName'];
$sql="select * from attentionList where attentionName='$attentionName'";
$res1=mysql_query($sql);
if(mysql_num_rows($res1)===0){
	$arr=[];
	array_push($arr,$onlineName);
	$sql2="INSERT into attentionList(attentionName,attentionArr) values('$attentionName','$attentionArr')";
	mysql_query($sql2);
}else{
	$obj=mysql_fetch_assoc($res1);
	$res2=array_push($obj["attentionArr"],$onlineName);
	$sql3="update attentionList set attentionArr='$res2' where attentionName='$attentionName'";
	$res3=mysql_query($sql3);
}
?>
