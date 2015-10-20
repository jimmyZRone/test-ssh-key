<?php
	//先死后活演示一个文件下载
	//先给文件取一名字
	$file_name = "918spyder.jpg";
	//先判断有没有这个文件
	if(!file_exists($file_name)){
		echo "你要的文件不存在!";
		return;
	}
	//然后打开这个文件
	$fp=fopen($file_name,'r');

	//浏览器在下载这个文件的时候，要先获取文件大小！
	$file_size=filesize($file_name);
	//把文件返回给浏览器
	header("Content-type: application/octet-stream");
	//按照字节大小返回
	header("Accept-Ranges: bytes");
	//返回文件的大小
	header("Accept-Length: $file_size");
	//这里在客户端弹出对话框，对应的文件名
	header("Content-Disposition: attachment; filename=".$file_name);

	//向客户端回送数据
	$buffer=1024;
	//下面的while循环语句是判断文件是否结束
	while(!feof($fp)){
	$file_data=fread($fp,$buffer);
	//把部分数据返回给浏览器
		echo $file_data;
	}

	//最后要关闭文件，很重要！
	fclose($fp);



	

?>