<?php
//进行回复的后端代码
// 需要评论表中的Id
// 需要被回复人的名字
// 需要回被回复人的的名字
// 需要回复的内容
// 需要回复的id
// 回复表revertList
$success=true;
$error=false;
$revert_review_id=$_POST['revert_review_id']
$revert_name=$_POST['revert_name'];
$revert_ed_name=$_POST['revert_ed_name'];
$revert_content=$_POST['revert_content'];
$revert_id=time().$revert_review_id;
$sql="INSERT into revertList(revert_review_id,revert_name,revert_ed_name,revert_content,revert_id) values('$revert_review_id','$revert_name','$revert_ed_name','$revert_content','$revert_id')";
$res=musql_query($sql);
if($res){
	echo $success;
}else{
	echo $error;
}

?>