
<?php

	//1.获取连接
	$conn=mysql_connect("127.0.0.1","root","root");

	//2.选择数据库
	mysql_select_db("php");

	//3.设置编码
	//mysql_query("set names gbk");
	
	//4. 发送查询指令

	$sql="select * from test";
	
	$res=mysql_query($sql,$conn);

	//5.接收返回的结果

	while($row=mysql_fetch_row($res)){
		
		foreach($row as $key=>$val){

			echo "--$val";
		}
		echo "<br/>";
	}
	//6.释放资源，关闭连接

	mysql_free_result($res);
	//这句话是关闭连接，可以写也可以不写，建议最好写上
	mysql_close($conn);

?>