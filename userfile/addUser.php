<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
    $obj =$_POST['form'];
   	$userAccount=$obj['name'];
   	$userPass=$obj['pass'];
   	$userIdentity=$obj['identity'];
   	$userSex=$obj['sex'];
   	$userAge=$obj['age'];

   	// 打开数据库
   	$result=mysql_connect("localhost","root","");
	if(!$result){
		die("打开数据库失败");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("打开数据库的空间失败");
	}


	$sql="insert into userlist(userAccount,userPass,userIdentity,userSex,userAge) values('$userAccount','$userPass','$userIdentity','$userSex','$userAge')";
	$res=mysql_query($sql);
	if($res){
	   echo("ok");
	}else{
	   echo("no");
	}

?>