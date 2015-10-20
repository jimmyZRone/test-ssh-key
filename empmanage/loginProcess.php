<?php
	require_once 'adminService.class.php';
	//接收用户的id和密码
	$id = $_POST['id'];
	//接收密码
	$password = $_POST['password'];
	$adminService = new AdminService();
	$name = $adminService->checkAdmin($id, $password);
	
	if($name != ''){
		//表示合法
		header("location:loginManage.php?name=$name");
		exit();
	}else{
		//表示不合法
		header("location:login.php?error=1");
		exit();
	}
?>