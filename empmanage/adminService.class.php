<?php

	require_once "sqlHelper.class.php";
	//该类是一个业务逻辑处理类。主要完成对admin表的操作
	class AdminService{
		
		public function checkAdmin($id,$password){

			$sql ="select password,name from userlogin where id=$id";
				

			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dql($sql);
			
			if($row=mysql_fetch_assoc($res)){
			if(md5($password)==$row['password']){
				return $row['name'];
				}
			}
			//关闭资源
			mysql_free_result($res);
			
			//关闭连接
			$sqlHelper->close_connect();
			return "";


			
		
			
		}
	
	}


?>