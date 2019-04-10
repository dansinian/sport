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
	// 数据库的连接
	 $result=mysql_connect("localhost","root","");
	if(!$result){
		die("打开数据库失败");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("打开数据库的空间失败");
	}
	$sql="INSERT into reviewList(review_eassy_id,review_name,review_content,review_time,review_id) values('$review_eassy_id','$review_name','$review_content','$review_time','$review_id')";
	$res=mysql_query($sql);
	if($res){
		echo $success;
	}else{
		echo $error;
	}
?>