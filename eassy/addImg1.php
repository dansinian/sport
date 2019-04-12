<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
    $upfile=$_FILES['upfile'];
    $defaultArr=$_POST['defaultArr'];
    $eassyId=$_POST['eassyId'];
  // 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="update eassy set eassyArr='$defaultArr' where eassyId='$eassyId'";
    $res21= $coon->query($sql);
	 $ress= move_uploaded_file($upfile['tmp_name'],"../imageFile/".$upfile["name"]);
?>