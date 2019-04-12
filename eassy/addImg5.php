<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
    $eassyId=$_POST['eassyId'];
  // 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="select * from eassy where eassyId='$eassyId'";
    $res21=$coon->query($sql);
    if($res21){
    	$obj=$res21->fetch_assoc();
    	$json=json_encode($obj);
    	print_r($json);
    }
?>