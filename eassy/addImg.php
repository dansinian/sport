<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
    $name=$_POST['name'];
    $upfile=$_FILES['upfile'];
    $imgsrc=$upfile['name'];
    $defaultArr=$_POST['defaultArr'];
    $eassyId=$_POST['eassyId'];
  	$result=mysql_connect("localhost","root","");
	if(!$result){
		die("打开数据库失败");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("打开数据库的空间失败");
	}
		// 建立新的完整数据
	$sql="INSERT INTO eassy(eassyId,eassyArr,eassyName) values('$eassyId','$defaultArr','$name')";
    $res21=mysql_query($sql);
	if($res21){
		echo $eassyId;	
	 }
	 $ress= move_uploaded_file($upfile['tmp_name'],"../imageFile/".$upfile["name"]);
?>