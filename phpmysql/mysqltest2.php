
<?php
	/*//实现对数据库的 增 删 改 
	//1.获取连接
	$conn=mysql_connect("localhost","root","root");
		if(!$conn){
			die("出错了".mysql_error());
		}
	//2.连接数据库
	mysql_select_db("php",$conn) or die(mysql_error());

	//3.设置编码
	mysql_query("set names gbk");

	//4.编写dml语句
	// $sql="insert into test (name,age,email,tel,salary,riqi) values('小//明',21,'xiaoming@sohu.com',028124514,2000.33,'2013-12-12')";
	//$sql="delete from test where id=5";
	$sql="update test set name='王五' where id=3";
	//如果是dml语句，则返回的是一个bool值
	
	$res=mysql_query($sql,$conn);
	//判断 添加 删除 修改 是否成功

	if(!$res){
		die("操作失败".mysql_error());
	}

	//看看有几条数据
	if(mysql_affected_rows($conn)>0){
		echo"操作成功";
	}else{
		echo"<br/>没有影响到行数";
	}

	mysql_close();*/



	require_once "mysqlTool.class.php";
	
	$sql="insert into test (name,age,email,tel,salary,riqi) values('小明',21,'xiaoming@sohu.com',028124514,2000.33,'2013-12-12')";
	$mysqlTool=new mysqlTool();
	$res=$mysqlTool->mysql_dml($sql);
	if($res==0){
		echo "失败";
	}else if($res==1){
		if(mysql_affected_rows()>0);
			echo"成功";
	}else if($res==2){
		echo"没有影响到行数";
	}

?>