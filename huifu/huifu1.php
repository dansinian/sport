<?php
//添加回复的信息
// 回复表revertList
 header("Access-Control-Allow-Origin:*");
$success=true;
$error=false;
$revert_review_id=$_POST['revert_review_id'];
$revert_name=$_POST['revert_name'];
$revert_ed_name=$_POST['revert_ed_name'];
$revert_content=$_POST['revert_content'];
$revert_id=time().$revert_review_id;
// 打开数据库
 $coon=new mysqli("localhost","root","","projectdata");
 // 数据库的业务操作
$sql="INSERT into revertList(revert_review_id,revert_name,revert_ed_name,revert_content,revert_id) values('$revert_review_id','$revert_name','$revert_ed_name','$revert_content','$revert_id')";
$res=$coon->query($sql);
if($res){
	echo $success;
}else{
	echo $error;
}

?>