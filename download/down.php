<?php
	//���������ʾһ���ļ�����
	//�ȸ��ļ�ȡһ����
	$file_name = "918spyder.jpg";
	//���ж���û������ļ�
	if(!file_exists($file_name)){
		echo "��Ҫ���ļ�������!";
		return;
	}
	//Ȼ�������ļ�
	$fp=fopen($file_name,'r');

	//���������������ļ���ʱ��Ҫ�Ȼ�ȡ�ļ���С��
	$file_size=filesize($file_name);
	//���ļ����ظ������
	header("Content-type: application/octet-stream");
	//�����ֽڴ�С����
	header("Accept-Ranges: bytes");
	//�����ļ��Ĵ�С
	header("Accept-Length: $file_size");
	//�����ڿͻ��˵����Ի��򣬶�Ӧ���ļ���
	header("Content-Disposition: attachment; filename=".$file_name);

	//��ͻ��˻�������
	$buffer=1024;
	//�����whileѭ��������ж��ļ��Ƿ����
	while(!feof($fp)){
	$file_data=fread($fp,$buffer);
	//�Ѳ������ݷ��ظ������
		echo $file_data;
	}

	//���Ҫ�ر��ļ�������Ҫ��
	fclose($fp);



	

?>