<?php
	$conn=mysql_connect("localhost","root","root");
	if($conn){
	echo "����mysql���ݿ�ok";
	}else{
		echo "�������ݿ�ʧ��";
	}
?>