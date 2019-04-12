<?php
// 添加用户
    header("Access-Control-Allow-Origin:*");
    $name=$_POST['name'];
    $upfile=$_FILES['upfile'];
    $imgsrc=$upfile['name'];
    $defaultArr=$_POST['defaultArr'];
    $eassyId=$_POST['eassyId'];
	// 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="INSERT INTO eassy(eassyId,eassyArr,eassyName) values('$eassyId','$defaultArr','$name')";
    $res21=$coon->query($sql);
	if($res21){
		echo $eassyId;	
	 }else{
        echo "ewewew";
     }
	 $ress= move_uploaded_file($upfile['tmp_name'],"../imageFile/".$upfile["name"]);
?>