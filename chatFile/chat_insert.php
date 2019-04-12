<?php
// 聊天信息的插入chatList
	$chat_sendPen=$_POST['sendPen'];
	$chat_receivePen=$_POST['receivePen'];
	$chat_id=$_POST['time'];
	$char_content=$_POST['message'];

	 // 数据库的打开

	// 先进行四条查询
	$sql1="select * from chatList where chat_sendPen='$chat_sendPen' and chat_receivePen='$chat_receivePen'";
	$res1=mysql_query($sql1);
	if($res1){
		$obj1=mysql_feach_assoc($res1);
		$combinationKey=$obj1['chat_combinationKey'];
		insetFn($combinationKey)；
	}
	$sql2="select * from chatList where chat_sendPen='$chat_sendPen' and chat_receivePen='$chat_receivePen'";
	if($res2){
		$obj2=mysql_feach_assoc($res2);
		$combinationKey=$obj2['chat_combinationKey'];
		insetFn($combinationKey)；
	}else{
		$combinationKey=$chat_sendPen.$chat_receivePen;
		insetFn($combinationKey)；

	}
	// 进行函数的插入业务操作
	 function insetFn($combinationKey){
	 	$x=$GLOBALS['chat_id'];
	 	$y=$GLOBALS['chat_sendPen'];
	 	$z=$GLOBALS['chat_receivePen'];
	 	$m=$GLOBALS['char_content'];
		$sql21="INSERT into chatList(chat_id,chat_sendPen,chat_receivePen,char_content,chat_combinationKey) values('x','y','z','m','$combinationKey')";
		$res21=mysql_query($sql21);
		return false;
	 }

?