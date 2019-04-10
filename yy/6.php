<!-- 评论的删除 -->
<?php
$success=true;
$error=false;
$review_id=$_GET['review_id'];
$sql="update revertList set review_content='评论已经删除' where review_id='$review_id'";
$res1=mysql_query($sql);
if($res1){
	echo $success;
}else{
	echo $error;
}
?>