<?php
// 进行评论的查询
$result1="还没有任何回复";
$result2="未能查找到结果";
$revert_review_id=$_GET['revert_review_id'];
$sql="select * from revertList where revert_review_id='$revert_review_id'";
$res1=mysql_query($sql);
if($res1){
	if(mysql_num_rows($res1)){
		$arr=[];
		for($i=0;$i<mysql_num_rows($res1);$i++){
			array_push($arr,mysql_fetch_assoc($res1))
		}
		if($i==mysql_num_rows($res1)){
			$json=json_encode($arr)
			echo $json;
		}
	}else{
		echo $result1;
	}
}else{
		echo $result2;
}
?>