<?php
// 点赞
    header("Access-Control-Allow-Origin:*");
	$success=true;
	$error=false;
	$eassyId=$_POST['eassyId'];
	$clickbool=$_POST['clickbool'];
	// 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="select * from eassy where eassyId='$eassyId'";
	$res1=$coon->query($sql);
	$result1=$res1->fetch_assoc();
	if($clickbool==true){
		$pernum=$result1['eassy_gulinum']+1;
	}else{
		$pernum=$result1['eassy_gulinum']-1;
	}
	$sql2="update eassy set eassy_gulinum='$pernum' where eassyId='$eassyId'";
	$coon->query($sql2);
?>