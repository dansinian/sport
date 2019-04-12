<?php
// 一个文章的所有评论
    header("Access-Control-Allow-Origin:*");
	$result1="还没有任何评论";
	$result2="未能查找到结果";
	$review_eassy_id=$_POST['review_eassy_id'];
	// 打开数据库
    $coon=new mysqli("localhost","root","","projectdata");
    //数据库的业务操作
	$sql="select * from reviewList where review_eassy_id='$review_eassy_id'";
	$res1=$coon->query($sql);
	if($res1){
		if($res1->num_rows){
			$arr=[];
			for($i=0;$i<$res1->num_rows;$i++){
				$obj=$res1->fetch_assoc();
				array_push($arr,$obj);
			}
			if($i==$res1->num_rows){
				$json=json_encode($arr);
				echo $json;
			}
		}else{
			echo $result1;
		}
	}else{
			echo $result2;
	}
?>