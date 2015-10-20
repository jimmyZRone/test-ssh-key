<?php
	require_once 'empService.class.php';
	$empService = new EmpService;
	
	
	$_REQUEST['flag'];
	//看看用户是要分页还是要删除用户
	if (!empty($_REQUEST['flag'])) {
			//接收$flag值
			$flag=$_REQUEST['flag'];
			if($flag=="del"){
			$id=$_REQUEST['id'];
			if($empService -> delEmpById($id)==1){
				//成功
				header("location: ok.php");
				exit();
			}else{
				//失败
				header("location: error.php");
				exit();
			}
		}else if($flag=="addEmp"){
			//则证明要添加用户
			//就接收数据用post接收
			$name=$_POST['name'];
			$grade=$_POST['grade'];
			$email=$_POST['email'];
			
			$res=$empService ->addEmp($name, $grade, $email);
			if($res==1){
				//成功
				header("location: ok.php");
				exit();
			}else{
				//失败
				header("location: error.php");
				exit();
			}
		}else if($flag=="updateEmp"){
			$id=$_POST['id'];
			$name=$_POST['name'];
			$grade=$_POST['grade'];
			$email=$_POST['email'];
			
			$res=$empService ->updateEmpUI($id,$name, $grade, $email);
			if($res==1){
				//成功
				header("location: ok.php");
				exit();
			}else{
				//失败
				header("location: error.php");
				exit();
			}
		}
	}
?>