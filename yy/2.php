<?php
// 进行评论// 需要评论表reviewList
// 被评论的文章
// 评论人的个人
// 评论的内容
// 评论的时间
// 需要评论的主键
$success=true;
$error=false;
$review_eassy_id=$_POST['review_eassy_id']; 
$review_name=$_POST['review_name'];
$review_content=$_POST['review_content'];
$review_time=$_POST['review_time'];
$review_id=time().$review_eassy_id;
$sql="INSERT into reviewList(review_eassy_id,review_ed_name,review_content,review_time,review_id) values('$review_eassy_id','$review_ed_name','$review_content','$review_time','$review_id')";
$res=musql_query($sql);
if($res){
	echo $success;
}else{
	echo $error;
}

?>