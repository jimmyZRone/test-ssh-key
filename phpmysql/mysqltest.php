
<?php

	//1.��ȡ����
	$conn=mysql_connect("127.0.0.1","root","root");

	//2.ѡ�����ݿ�
	mysql_select_db("php");

	//3.���ñ���
	//mysql_query("set names gbk");
	
	//4. ���Ͳ�ѯָ��

	$sql="select * from test";
	
	$res=mysql_query($sql,$conn);

	//5.���շ��صĽ��

	while($row=mysql_fetch_row($res)){
		
		foreach($row as $key=>$val){

			echo "--$val";
		}
		echo "<br/>";
	}
	//6.�ͷ���Դ���ر�����

	mysql_free_result($res);
	//��仰�ǹر����ӣ�����дҲ���Բ�д���������д��
	mysql_close($conn);

?>