<?php
// 评论
    header("Access-Control-Allow-Origin:*");
	$success=true;
	$error=false;
	$review_eassy_id=$_POST['review_eassy_id']; 
	$review_name=$_POST['review_name'];
	$review_content=$_POST['review_content'];
	$review_time=$_POST['review_time'];
	$review_id=time().$review_eassy_id;
	// 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="INSERT into reviewList(review_eassy_id,review_name,review_content,review_time,review_id) values('$review_eassy_id','$review_name','$review_content','$review_time','$review_id')";
	$res=$coon->query($sql);
	if($res){
		echo $success;
	}else{
		echo $error;
	}
?>