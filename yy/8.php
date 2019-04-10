<!-- 鼓励的增加 -->
<!-- hearten -->
<?php
$success=true;
$error=false;
$eassyId=$_GET['eassyId'];
$clickbool=$_GET['clickbool'];
$sql="select * eassy from eassyId='$eassyId'";
$res1=mysql_query($sql);
if($res1){
	$result1=mysql_fetch_assoc($res1);
	if($clickbool){
		$pernum=$result1['eassy_gulinum']+1;
	}elae{
		$pernum=$result1['eassy_gulinum']-1;
	}
	$sql2="update eassy set='eassy_gulinum' where eassyId='$eassyId'";
	mysql_query($sql2);
}else{
	echo $error;
}

?>
