
<?php
	/*//ʵ�ֶ����ݿ�� �� ɾ �� 
	//1.��ȡ����
	$conn=mysql_connect("localhost","root","root");
		if(!$conn){
			die("������".mysql_error());
		}
	//2.�������ݿ�
	mysql_select_db("php",$conn) or die(mysql_error());

	//3.���ñ���
	mysql_query("set names gbk");

	//4.��дdml���
	// $sql="insert into test (name,age,email,tel,salary,riqi) values('С//��',21,'xiaoming@sohu.com',028124514,2000.33,'2013-12-12')";
	//$sql="delete from test where id=5";
	$sql="update test set name='����' where id=3";
	//�����dml��䣬�򷵻ص���һ��boolֵ
	
	$res=mysql_query($sql,$conn);
	//�ж� ��� ɾ�� �޸� �Ƿ�ɹ�

	if(!$res){
		die("����ʧ��".mysql_error());
	}

	//�����м�������
	if(mysql_affected_rows($conn)>0){
		echo"�����ɹ�";
	}else{
		echo"<br/>û��Ӱ�쵽����";
	}

	mysql_close();*/



	require_once "mysqlTool.class.php";
	
	$sql="insert into test (name,age,email,tel,salary,riqi) values('С��',21,'xiaoming@sohu.com',028124514,2000.33,'2013-12-12')";
	$mysqlTool=new mysqlTool();
	$res=$mysqlTool->mysql_dml($sql);
	if($res==0){
		echo "ʧ��";
	}else if($res==1){
		if(mysql_affected_rows()>0);
			echo"�ɹ�";
	}else if($res==2){
		echo"û��Ӱ�쵽����";
	}

?>