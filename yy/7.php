<!-- 回复的删除 -->
<?php
$success=true;
$error=false;
$revert_id=$_GET['revert_id'];
$sql="update revertList set review_content='回复已经删除' where revert_id='$revert_id'";
$res1=mysql_query($sql);
if($res1){
	echo $success;
}else{
	echo $error;
}
?>