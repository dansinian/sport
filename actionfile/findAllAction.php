<?php
    // 查看所有的活动
	// actionlist
    // 使用对象：管理人员，普通人员，专业人数
	// 引入数据库文档
	 header("Access-Control-Allow-Origin:*");
	$coon=new mysqli("localhost","root","","projectdata");
	$sql="select * from actionlist";
	$res=$coon->query($sql);
	if($res){
		if($res->num_rows){
			$crr=[];
			for($i=1;$i<=$res->num_rows;$i++){
				array_push($crr,$res->fetch_assoc());
			}
			echo JSON_encode($crr);
		}else{
			echo "未能加载数据";
		}
	}

?>
