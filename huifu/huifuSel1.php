<?php
// 对回复进行查询：
// 回复表revertList
 header("Access-Control-Allow-Origin:*");
$success=true;
$error=false;
$revertNum=$_POST['revertNum'];
$revert_review_id=$_POST['revert_review_id'];
// 打开数据库
 $coon=new mysqli("localhost","root","","projectdata");
//  // 数据库的业务操作
$sql="select * from revertList where revert_review_id='$revert_review_id'";
$res1=$coon->query($sql);
if($res1){
	$arr=[];
	for($i=0;$i<$revertNum;$i++){
		$ocj=$res1->fetch_assoc();
		array_push($arr,$ocj);
	}
	$json=json_encode($arr);
	echo $json;
}else{	//查询没有数据，那么返回空对象
		echo null;
}

?>