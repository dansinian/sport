<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
    $defaultArr=$_POST['defaultArr'];
    $eassyId=$_POST['eassyId'];
  	$result=mysql_connect("localhost","root","");
	// 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="update eassy set eassyArr='$defaultArr' where eassyId='$eassyId'";
    $res21=$coon->query($sql);
?>