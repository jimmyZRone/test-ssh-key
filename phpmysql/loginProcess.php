<?php
	//接收用户的id和密码
	$id = $_POST['id'];
	//接收密码
	$password = $_POST['password'];

	//拿到连接

	$conn = mysql_connect("localhost","root","root");
		//判断连接是否成功了

		if(!$conn){
			die("连接失败".mysql_error());
		}
			//设置编码，是为了与mysql数据库编码一致
			mysql_query("set names gbk",$conn);

			//连接数据库 也要判断连接是否成功
			mysql_select_db("userlogin",$conn) or die(mysql_error());

			$sql ="select password,name from userlogin where id=$id";


			$res = mysql_query($sql,$conn);

		if($row=mysql_fetch_assoc($res)){
			//如果查询到了，证明ID查到了
			//从数据库取出密码，验证密码对不对
				if($row['password']==md5($password)){

					$name=$row['name'];

				header("location:loginManage.php?name=$name");
				exit();
			}
		}
			header("location:login.php?error=1");
			exit();
			//释放资源
			mysql_free_result($res);
			//关闭连接 
			mysql_close($conn);
		

		//简单的验证一下
		/*if($id =="1000" && $password =="123"){
			//合法的用户
			header("location:loginSuccessful.php");
				exit();
	}else{
			//非法用户
			header("location:login.php?error=1");
				exit();
	}*/
?>