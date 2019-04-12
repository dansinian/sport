<?php
//删除一个发表的说说，那么删除所有的评论和回复
	$eassyId=$_POST['eassyId'];
	$sql="select * from eassy where eassyId='$eassyId'";
	$res=mysql_query($res1);
	if($res1){
		// 进行评论的查询,返回评论的review_id
		$sql2="select  from reviewList where reivew_eassy_id='$eassyId'"；
		$res2=mysql_query($sql2);
		// 存在评论
		if($res2){
			$reviewNum=mysql_num_rows($res2);
			$str="";//进行删除时候的字符
			for($i=0;$i<$reviewNum;$i++){

			};
			// 删除评论
			// 删除回复

		}else{
		// 不存在评论
		}
	}else{

	}

?>