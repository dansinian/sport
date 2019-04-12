<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
    $eassycontent =$_POST['message'];
    $eassyId=$_POST['eassyId'];
  // 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="update eassy set eassycontent ='$eassycontent' where eassyId='$eassyId'";
    $res21=$coon->query($sql);
?>