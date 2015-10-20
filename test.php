<?php
	//预定义变量
 	//foreach($_SERVER as $key=>$val){
 	//	echo "$key=$val<br/>";
 	//}
	//可以取出访问该页面的ip.
 	if($_SERVER['REMOTE_ADDR']=="127.0.0.1"){
 		//跳转到一个警告页面
 		header("location:err.php");
 	}



?>