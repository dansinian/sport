<?php
// 一个文章的所有评论
    header("Access-Control-Allow-Origin:*");
	$result1="还没有任何评论";
	$result2="未能查找到结果";
	$review_eassy_id=$_POST['review_eassy_id'];
// 数据库的连接
	 $result=mysql_connect("localhost","root","");
	if(!$result){
		die("打开数据库失败");
	}
	$db=mysql_select_db("projectdata");
	if(!$db){
		die("打开数据库的空间失败");
	}
	// 进行的操作
	$sql="select * from reviewList where review_eassy_id='$review_eassy_id'";
	$res1=mysql_query($sql);
	if($res1){
		if(mysql_num_rows($res1)){
			$arr=[];
			for($i=0;$i<mysql_num_rows($res1);$i++){
				$obj=mysql_fetch_assoc($res1);
				array_push($arr,$obj);
			}
			if($i==mysql_num_rows($res1)){
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