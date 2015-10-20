<html>
<head>
	<meta charset='utf-8'/>
</head>
<?php
	echo "欢迎".$_GET['name']."登陆成功<br/>";
	echo "<a href='login.php'>返回重新登陆</a><br/>";	
?>
<h1>主页面</h1>
<a href='emplist.php'>管理用户</a><br/>
<a href='addEmp.php'>添加用户</a><br/>
<a href='#'>查询用户</a><br/>
<a href='#'>退出系统</a><br/>
</html>