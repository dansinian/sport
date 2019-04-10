<?php
// 进行评论的查询
$result1="还没有任何评论";
$result2="未能查找到结果";
$review_eassy_id=$_GET['review_eassy_id'];
$sql="select * from reviewList where review_eassy_id='$review_eassy_id'";
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